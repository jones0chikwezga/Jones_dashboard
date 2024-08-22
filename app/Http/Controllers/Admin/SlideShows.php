<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slideshow;
use Intervention\Image\Facades\Image;

class SlideShows extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allslides = Slideshow::all();
        return view('admin.slideshows.index')->with([
            'slides' => $allslides,
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

        $slides = Slideshow::all();
        $allslides = count($slides);

        $this->validate($request,[
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'heading'=>'required',
            'body' => 'required'

        ]);

        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/slides', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/slides/'. $picNameToStore;
        Image::make($image_path)->save();

        if($allslides == 3){

            return back()->with('message','Maximum number of slides reached');

        }else{

        Slideshow::create([

            'image' => 'uploads/slides/'. $picNameToStore,
            'heading' => $request->input('heading'),
             'body' => $request->input('body')
        ]);

          return back()->with('message','slide added successfully');
        }


        // return redirect('/settings');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'heading'=>'required',
            'body' => 'required'
        ]);

        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/slides', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/slides/'. $picNameToStore;
        Image::make($image_path)->save();


        Slideshow::where('id',$id)
        ->update([

            'image' => 'uploads/slides/'. $picNameToStore,
             'heading' => $request->input('heading'),
             'body' => $request->input('body')
        ]);

          return back()->with('message','slide updated successfully');
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
