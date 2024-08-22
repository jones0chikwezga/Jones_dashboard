<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Partner;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allpartners = Partner::orderBy('id', 'DESC')->get();
        

        return view('admin.partner.index')->with([
            'partners' => $allpartners,
            
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
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|unique:partners',
            'location' => 'required',
        ]);

        if($request->hasFile('image')){
        $picNameWithExt = request()->file('image')->getClientOriginalName();
        $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('image')->getClientOriginalExtension();
        $picNameToStore = $picName.time().".".$extension;
        request()->file('image')->move(base_path().'/public/uploads/partner', $picNameToStore);

        // resize the image
        $image_path = base_path().'/public/uploads/partner/'. $picNameToStore;
        Image::make($image_path)->save();


        Partner::create([
            'name' => $request->name,
            'location' => $request->location,
            'image' => 'uploads/partner/'. $picNameToStore,
        ]);

        return back()->with('message','partner added successfully');
    }else{
        Partner::create([
            'name' => $request->name,
            'location' => $request->location,
            'image' => 'null',
        ]);

        return back()->with('message','partner added successfully');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::find($id);
        return view('admin.partner.show')->with([
            'partner'=>$partner,
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
            'location' => 'required',
        ]);

        if($request->hasFile('image')){

            $picNameWithExt = request()->file('image')->getClientOriginalName();
            $picName = pathinfo($picNameWithExt, PATHINFO_FILENAME);
            $extension = request()->file('image')->getClientOriginalExtension();
            $picNameToStore = $picName.time().".".$extension;
            request()->file('image')->move(base_path().'/public/uploads/partner', $picNameToStore);
    
            // resize the image
            $image_path = base_path().'/public/uploads/partner/'. $picNameToStore;
            Image::make($image_path)->save();
    
    
            Partner::where('id',$id)
            ->update([
                'name' => $request->name,
                'location' => $request->location,
                'image' => 'uploads/partner/'. $picNameToStore,
            ]);
    
            return back()->with('message','partner updated successfully');

        }else{

            Partner::where('id',$id)
            ->update([
                'name' => $request->name,
                'location' => $request->location,
            ]);
    
            return back()->with('message','partner updated successfully');

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
        $partner = Partner::find($id);
        $partner -> delete();

        return redirect('/partners')->with('message','partner deleted successfully'); 
    }
}
