<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vacancy;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allfiles = File::orderBy('id', 'DESC')->get();


        return view('admin.files.index')->with([
            'files' => $allfiles,

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
            'filename' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $fileNameWithExt = request()->file('file')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('file')->getClientOriginalExtension();
        $fileNameToStore = $fileName.time().".".$extension;
        request()->file('file')->move(base_path().'/public/uploads/files', $fileNameToStore);
        $file_path = base_path().'/public/uploads/files/'. $fileNameToStore;

        File::create([
            'filename' => $request->filename,
            'description' => $request->description,
            'category' => $request->category,
            'file' => 'uploads/files/'. $fileNameToStore,
            'uploader' =>auth()->user()->email,
        ]);

        return back()->with('message','file added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file_details = File::find($id);

        // dd($file_details);
        return view('admin.files.show',['file_details'=>$file_details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
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
            // 'file' => 'required',
            'category' => 'required',
            'filename' => 'required',
            'description' => 'required',
        ]);

        // $fileNameWithExt = request()->file('file')->getClientOriginalName();
        // $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // $extension = request()->file('file')->getClientOriginalExtension();
        // $fileNameToStore = $fileName.time().".".$extension;
        // request()->file('file')->move(base_path().'/public/uploads/files', $fileNameToStore);
        // $file_path = base_path().'/public/uploads/files/'. $fileNameToStore;

        File::where('id',$id)
        ->update([
            'filename' => $request->filename,
            'description' => $request->description,
            // 'file' => 'uploads/files/'. $fileNameToStore,
            'category' => $request->category,
            'uploader' =>auth()->user()->email,
        ]);

        return back()->with('message','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = File::find($id);
        $resource -> delete();

        return redirect('/files')->with('message','resource deleted successfully');
    }
}
