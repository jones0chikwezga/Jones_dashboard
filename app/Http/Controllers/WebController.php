<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Testimonial;
use App\Models\Slideshow;
use App\Models\ProgramModel;
use App\Models\Video;
use App\Models\Story;
use App\Models\Causes;
use App\Models\StatModel;
use App\Models\cores;
use App\Models\avm;
use App\Models\programsall;



class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slidepics = Slideshow::all();
        $allevents = Events::orderBy('id', 'DESC')->take(2)->get();
        $alltestimonials = Testimonial::orderBy('updated_at', 'DESC')->paginate(6);
        $allprograms = ProgramModel::orderBy('updated_at','desc')->take(6)->get();
        $videos = Story::where('image','N/A')->orderBy('updated_at','desc')->paginate(3);
        $allcauses = Causes::orderBy('id', 'DESC')->get();
        $stats = StatModel::where('id',1)->first();
        $avm = avm::where('id',1)->first();
        $cores = cores::all();
        $programs = programsall::all();

        

        



        // dd($allcauses);

        return view('website.index')->with([
            'events'=>$allevents,
            'testimonials'=>$alltestimonials,
            'slidepics' => $slidepics,
            'allprograms' => $allprograms,
            'videos' => $videos,
            'causes' => $allcauses,
            'stats'=>$stats,
            'avm' =>$avm,
            'cores'=>$cores,
            'programs'=>$programs
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
        //
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
        //
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
