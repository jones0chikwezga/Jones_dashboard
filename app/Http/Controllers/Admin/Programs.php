<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramModel;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Programs extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = ProgramModel::orderBy('id', 'DESC')->get();


        return view('admin.programs.index')->with([
            'programs' => $programs,

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
            // 'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'body' => 'required',
        ]);

        // $picNameWithExt = request()->file('image')->getClientOriginalName();
        // $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        // $extension = request()->file('image')->getClientOriginalExtension();
        // $picNameToStore = $picName.time().".".$extension;
        // request()->file('image')->move(base_path().'/public/uploads/programs', $picNameToStore);

        // resize the image
        // $image_path = base_path().'/public/uploads/programs/'. $picNameToStore;
        // Image::make($image_path)->save();


            ProgramModel::create([ 
            'title' => $request->title,
            'body' => $request->body,
            // 'image' => 'uploads/programs/'. $picNameToStore,
        ]);

        return back()->with('message','Item added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = ProgramModel::find($id);


        return view('admin.programs.show')->with([
            'program' => $program,

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
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|min:10',
            'body' => 'required|min:10',
        ]);

        if($request->hasFile('image')){
            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/programs', $picNameToStore);

            // resize the image
            $image_path = base_path().'/public/uploads/programs/'. $picNameToStore;
            Image::make($image_path)->save();


            ProgramModel::where('id',$id)
            ->update([
                'title' => $request->title,

                'body' => $request->body,
                'image' => 'uploads/programs/'. $picNameToStore,
            ]);

            return back()->with('message','Item edited successfully');
        }else{

            ProgramModel::where('id',$id)
            ->update([
                'title' => $request->title,

                'body' => $request->body,
            ]);

            return back()->with('message','Item edited successfully');

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
        $program = ProgramModel::find($id);
        $program -> delete();

        return redirect('/program')->with('message','item deleted successfully');
    }
}
