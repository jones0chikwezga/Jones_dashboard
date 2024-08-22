<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vacancy;
use App\Models\Application;
use App\Models\programsall;



class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$programs = programsall::all();
        $allvacancies = vacancy::orderBy('updated_at', 'DESC')->paginate(6);
        // dd($allvacancies);
        return view('website.vacancy.index')->with([
            'vacancies'=>$allvacancies,'programs'=>$programs
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
            'cv' => 'required|mimes:pdf|required',
            'cos' => 'mimes:pdf|required',
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        // $position = $request->position;

        // dd($position);


        $fileNameWithExt = request()->file('cv')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('cv')->getClientOriginalExtension();
        $fileNameToStore = $fileName.time().".".$extension;
        request()->file('cv')->move(base_path().'/public/uploads/application', $fileNameToStore);

        // resize the image
        $file_path = base_path().'/public/uploads/application/'. $fileNameToStore;
        // vacancy::make($file_path)->save();


        $file1NameWithExt = request()->file('cos')->getClientOriginalName();
        $file1Name = pathinfo($file1NameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('cos')->getClientOriginalExtension();
        $file1NameToStore = $file1Name.time().".".$extension;
        request()->file('cos')->move(base_path().'/public/uploads/application', $file1NameToStore);

        // resize the image
        $file_path = base_path().'/public/uploads/application/'. $file1NameToStore;
        // vacancy::make($file_path)->save();


        Application::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'cv' => 'uploads/application/'. $fileNameToStore,
            'cos' => 'uploads/application/'. $file1NameToStore,
            
        ]);

        return back()->with('message','application was sent successfully, we will review your documents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacancies = vacancy::find($id);
        // dd($allvacancies);
        return view('website.vacancy.show')->with([
            'vacancy'=>$vacancies
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
