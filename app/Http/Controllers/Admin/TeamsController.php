<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allteam = Team::orderBy('id', 'DESC')->get();
        

        return view('admin.team.index')->with([
            'teams' => $allteam,
            
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
            'name' => 'required|unique:teams',
            'position' => 'required',
        ]);


        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/team', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/team/'. $picNameToStore;
        Image::make($image_path)->save();


        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => 'uploads/team/'. $picNameToStore,
        ]);
 
        return back()->with('message','team added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        

        return view('admin.team.show')->with([
            'team' => $team,
            
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
            'name' => 'required|min:10',
            'position' => 'required',
        ]);

        if($request->hasFile('image')){
            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/team', $picNameToStore);
    
            // resize the image
            $image_path = base_path().'/public/uploads/team/'. $picNameToStore;
            Image::make($image_path)->save();
    
    
            Team::where('id',$id)
            ->update([
                'name' => $request->name,
                'position' => $request->position,
                'image' => 'uploads/team/'. $picNameToStore,
            ]);
    
            return back()->with('message','team updated successfully');
        }else{

            Team::where('id',$id)
            ->update([
                'name' => $request->name,
                'position' => $request->position,
            ]);
    
            return back()->with('message','team updated successfully');

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
        $team = Team::find($id);
        $team -> delete();

        return redirect('/teams')->with('message','item deleted successfully'); 
    }
}
