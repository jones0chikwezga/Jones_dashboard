<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Followup;


class Stories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allstory = Story::orderBy('id', 'DESC')->get();


        return view('admin.stories.index')->with([
            'stories' => $allstory,

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
     *zz
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'link'=>'',
            'body' => 'required',
        ]);

        $image = $request->image;
        $link = $request->link;





        if(empty($image) AND empty($link)){
            return back()->with('error','you must provide either the image or video link to proceed');
        }elseif(empty($image)){
            Story::create([
                'title' => $request->title,
                'link' => $request->link,
                'body' => $request->body,
                'image' => 'N/A',
            ]);

            return back()->with('message','successful story added successfully');
            // dd('image is empty, store link');

        }elseif(empty($link)){

            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/story', $picNameToStore);

            // resize the image
            $image_path = base_path().'/public/uploads/story/'. $picNameToStore;
            Image::make($image_path)->save();


            Story::create([
                'title' => $request->title,
                'link' => 'N/A',
                'body' => $request->body,
                'image' => 'uploads/story/'. $picNameToStore,
            ]);


            // dd('link is empty, store image');

        return back()->with('message','successful story added successfully');


        }else{
            return back()->with('error','you must provide either the image or video link to proceed');
        }


        // Story::create([
        //     'title' => $request->title,

        //     'body' => $request->body,

        // ]);

        // return back()->with('message','successful story added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Story::find($id);

        $follows = Followup::where('case_id',$id)->orderBy('id', 'DESC')->get();


        // dd($follows);


        return view('admin.stories.show')->with([
            'story' => $story,
            'follows' => $follows,

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

        $image = $request->image;
        $link = $request->link;





        if(empty($image) AND empty($link)){
            return back()->with('error','you must provide either the image or video link to proceed');
        }elseif(empty($image)){
            Story::where('id',$id)
            ->update([
                'title' => $request->title,
                'link' => $request->link,
                'body' => $request->body,
                'image' => 'N/A',
            ]);

            return back()->with('message','successful story added successfully');
            // dd('image is empty, store link');

        }elseif(empty($link)){

            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/story', $picNameToStore);

            // resize the image
            $image_path = base_path().'/public/uploads/story/'. $picNameToStore;
            Image::make($image_path)->save();


            Story::where('id',$id)
            ->update([
                'title' => $request->title,
                'link' => 'N/A',
                'body' => $request->body,
                'image' => 'uploads/story/'. $picNameToStore,
            ]);


            // dd('link is empty, store image');

        return back()->with('message','successful story added successfully');


        }else{
            return back()->with('error','you must provide either the image or video link to proceed');
        }


        // Story::create([
        //     'title' => $request->title,

        //     'body' => $request->body,

        // ]);

        // return back()->with('message','successful story added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story -> delete();

        return redirect('/case_tracker_page')->with('message','item deleted successfully');
    }
}
