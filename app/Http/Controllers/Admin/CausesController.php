<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Causes;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CausesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causes = Causes::orderBy('id', 'DESC')->get();
        $category = Category::all();

        return view('admin.causes.index')->with([
            'causes' => $causes,
            'category' => $category,
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
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            // 'donated' => 'required',
        ]);

        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/causes', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/causes/'. $picNameToStore;
        Image::make($image_path)->save();


        Causes::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            // 'donated' => $request->donated,
            'image' => 'uploads/causes/'. $picNameToStore,

        ]);

        return back()->with('message','Cause added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $causes = Causes::find($id);
        $category = Category::all();

        return view('admin.causes.show')->with([
            'cause_details'=>$causes,
            'category'=>$category,

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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            // 'donated' => 'required',
        ]);


        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/causes', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/causes/'. $picNameToStore;
        Image::make($image_path)->save();


        Causes::where('id',$id)
        ->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            // 'donated' => $request->donated,
            'image' => 'uploads/causes/'. $picNameToStore,

        ]);

        return back()->with('message','Cause edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cause = Causes::find($id);
        $cause -> delete();

        return redirect('/causes')->with('message','cause deleted successfully');
    }
}
