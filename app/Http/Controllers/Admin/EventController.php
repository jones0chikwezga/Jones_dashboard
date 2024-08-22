<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Events;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allevents = Events::orderBy('id', 'DESC')->get();
        $category = Category::all();
        
        

        return view('admin.events.index')->with([
            'events' => $allevents,
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
            'event_title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
        ]);

        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/events', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/events/'. $picNameToStore;
        Image::make($image_path)->save();


        Events::create([
            'event_title' => $request->event_title,
            'category' => $request->category,
            'content' => $request->content,
            'date' => $request->date,
            'starttime' => $request->starttime,
            'endtime' => $request->endtime,
            'image' => 'uploads/events/'. $picNameToStore,
            'uploader' =>auth()->user()->email,
        ]);

        return back()->with('message','Event added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Events::find($id);
        $category = Category::all();

        return view('admin.events.show')->with([
            'events'=>$events,
            'category' =>$category
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
            'event_title' => 'required|min:10',
            'category' => 'required',
            'content' => 'required|min:10',
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
        ]);

        if($request->hasFile('image')){
            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/events', $picNameToStore);
    
            // resize the image
            $image_path = base_path().'/public/uploads/events/'. $picNameToStore;
            Image::make($image_path)->save();
    
    
            Events::where('id',$id)
            ->update([
                'event_title' => $request->event_title,
                'category' => $request->category,
                'content' => $request->content,
                'date' => $request->date,
                'starttime' => $request->starttime,
                'endtime' => $request->endtime,
                'image' => 'uploads/events/'. $picNameToStore,
                'uploader' =>auth()->user()->email,
            ]);
    
            return back()->with('message','Event updated successfully');
        }else{
            Events::where('id',$id)
            ->update([
                'event_title' => $request->event_title,
                'category' => $request->category,
                'content' => $request->content,
                'date' => $request->date,
                'starttime' => $request->starttime,
                'endtime' => $request->endtime,
                'uploader' =>auth()->user()->email,
            ]);
    
            return back()->with('message','Event updated successfully');
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
        $event = Events::find($id);
        $event -> delete();

        return redirect('/event')->with('message','Event deleted successfully'); 
    }
}
