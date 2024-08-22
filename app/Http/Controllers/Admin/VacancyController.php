<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vacancy;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allvacancies = vacancy::orderBy('id', 'DESC')->get();
        
        

        return view('admin.vacancy.index')->with([
            'vacancies' => $allvacancies,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:pdf',
            'position' => 'required',
            'duties' => 'required',
            'qualification' => 'required',
            'closing_date' => 'required',
        ]);

        $fileNameWithExt = request()->file('file')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('file')->getClientOriginalExtension();
        $fileNameToStore = $fileName.time().".".$extension;
        request()->file('file')->move(base_path().'/public/uploads/vacancies', $fileNameToStore);

        // resize the image
        $file_path = base_path().'/public/uploads/vacancies/'. $fileNameToStore;
        // vacancy::make($file_path)->save();

        vacancy::create([
            'position' => $request->position,
            'duties' => $request->duties,
            'qualification' => $request->qualification,
            'closing_date' => $request->closing_date,
            'file' => 'uploads/vacancies/'. $fileNameToStore,
            'uploader' =>auth()->user()->email,
        ]);

        return back()->with('message','vacancy added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacancy_details = vacancy::find($id);

        return view('admin.vacancy.show')->with([
            'vacancy' => $vacancy_details,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'file' => 'mimes:pdf',
            'position' => 'required|min:10',
            'duties' => 'required',
            'qualification' => 'required',
            'closing_date' => 'required',
        ]);

        if($request->hasFile('file')){
            $fileNameWithExt = request()->file('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('file')->getClientOriginalExtension();
            $fileNameToStore = $fileName.time().".".$extension;
            request()->file('file')->move(base_path().'/public/uploads/vacancies', $fileNameToStore);
    
            // resize the image
            $file_path = base_path().'/public/uploads/vacancies/'. $fileNameToStore;
            // vacancy::make($file_path)->save();
    
            vacancy::where('id',$id)
            ->update([
                'position' => $request->position,
                'duties' => $request->duties,
                'qualification' => $request->qualification,
                'closing_date' => $request->closing_date,
                'file' => 'uploads/vacancies/'. $fileNameToStore,
                'uploader' =>auth()->user()->email,
            ]);
    
            return back()->with('message','vacancy updated successfully');
        }else{
          
    
            vacancy::where('id',$id)
            ->update([
                'position' => $request->position,
                'duties' => $request->duties,
                'qualification' => $request->qualification,
                'closing_date' => $request->closing_date,
                'uploader' =>auth()->user()->email,
            ]);
    
            return back()->with('message','vacancy updated successfully');

        }

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = vacancy::find($id);
        $vacancy -> delete();

        return redirect('/vacancy')->with('message','vacancy deleted successfully'); 
    }
}
