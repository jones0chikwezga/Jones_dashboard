<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $category = Category::all();
        

        return view('admin.blog.index')->with([
            'blogs' => $blogs,
            'category' =>$category
            
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
            'blog_title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/blogs', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/blogs/'. $picNameToStore;
        Image::make($image_path)->save();


        Blog::create([
            'blog_title' => $request->blog_title,
            'category' => $request->category,
            'content' => $request->content,
            'image' => 'uploads/blogs/'. $picNameToStore,
            'uploader' =>auth()->user()->email,
        ]);

        return back()->with('message','blog added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::find($id);
        $category = Category::all();

        return view('admin.blog.show')->with([
            'blog_details'=>$blogs,
            'category'=>$category
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
            'blog_title' => 'required|min:10',
            'category' => 'required',
            'content' => 'required|min:10',
        ]);

        if($request->hasFile('image')){
            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/blogs', $picNameToStore);
    
            // resize the image
            $image_path = base_path().'/public/uploads/blogs/'. $picNameToStore;
            Image::make($image_path)->save();
    
    
            Blog::where('id',$id)
            ->update([
                'blog_title' => $request->blog_title,
                'category' => $request->category,
                'content' => $request->content,
                'image' => 'uploads/blogs/'. $picNameToStore,
                'uploader' =>auth()->user()->email,
            ]);
    
            return back()->with('message','blog updated successfully');
        }else{

            Blog::where('id',$id)
            ->update([
                'blog_title' => $request->blog_title,
                'category' => $request->category,
                'content' => $request->content,
                'uploader' =>auth()->user()->email,
            ]);
    
            return back()->with('message','blog updated successfully');

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
        $blog = Blog::find($id);
        $blog -> delete();

        return redirect('/blogs')->with('message','blog deleted successfully'); 
    }
}
