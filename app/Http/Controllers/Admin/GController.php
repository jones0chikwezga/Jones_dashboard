<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allgallery = Gallery::orderBy('id', 'DESC')->get();
        

        return view('admin.gallery.index')->with([
            'gallery' => $allgallery,
            
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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'location' => 'required',
        ]);
        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/files', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/files/'. $picNameToStore;
        Image::make($image_path)->save();


        Gallery::create([
            'location' => $request->location,
            'image' => 'uploads/files/'. $picNameToStore,
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.show')->with([
            'gallery'=>$gallery,
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
            'location' => 'required|min:5',
        ]);

        if($request->hasFile('image')){
        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/files', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/files/'. $picNameToStore;
        Image::make($image_path)->save();
    
    
            Gallery::where('id',$id)
            ->update([
                'location' => $request->location,
                'image' => 'uploads/files/'. $picNameToStore,
            ]);
    
            return back()->with('message','Gallery updated successfully');
        }else{
            Gallery::where('id',$id)
            ->update([
                'location' => $request->location,
            ]);
    
            return back()->with('message','Gallery updated successfully');
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
        $gallery = Gallery::find($id);
        $gallery -> delete();

        return redirect('/gallerys')->with('message','Gallery deleted successfully'); 
    }
}
