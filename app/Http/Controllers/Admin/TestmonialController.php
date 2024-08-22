<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alltestimonial = Testimonial::orderBy('id', 'DESC')->get();
        

        return view('admin.testimonial.index')->with([
            'testimonials' => $alltestimonial,
            
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
            'name' => 'required',
            'body' => 'required',
        ]);

        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/testimonial', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/testimonial/'. $picNameToStore;
        Image::make($image_path)->save();


        Testimonial::create([
            'title' => $request->title,
            'name' => $request->name,
            'body' => $request->body,
            'image' => 'uploads/testimonial/'. $picNameToStore,
        ]);

        return back()->with('message','testimonial added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        

        return view('admin.testimonial.show')->with([
            'testimonial' => $testimonial,
            
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
            'name' => 'required|min:10',
            'body' => 'required|min:10',
        ]);

        if($request->hasFile('image')){
            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/testimonial', $picNameToStore);
    
            // resize the image
            $image_path = base_path().'/public/uploads/testimonial/'. $picNameToStore;
            Image::make($image_path)->save();
    
    
            Testimonial::where('id',$id)
            ->update([
                'title' => $request->title,
                'name' => $request->name,
                'body' => $request->body,
                'image' => 'uploads/testimonial/'. $picNameToStore,
            ]);
    
            return back()->with('message','testimonial edited successfully');
        }else{

            Testimonial::where('id',$id)
            ->update([
                'title' => $request->title,
                'name' => $request->name,
                'body' => $request->body,
            ]);
    
            return back()->with('message','testimonial edited successfully');

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
        $tes = Testimonial::find($id);
        $tes -> delete();

        return redirect('/testimonials')->with('message','item deleted successfully'); 
    }
}
