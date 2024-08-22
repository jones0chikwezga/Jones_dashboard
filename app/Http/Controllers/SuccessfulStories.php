<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\Followup;
use App\Models\File;
use App\Models\programsall;



class SuccessfulStories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcases = Story::orderBy('updated_at','desc')->paginate(6);
        $acts = File::where('category','ACT')->orderBy('updated_at','desc')->get();
        $policy = File::where('category','POLICY')->orderBy('updated_at','desc')->get();
        $programs = programsall::all();

       

        // dd($allblogs);

        return view('website.case.index')->with([
            'cases'=>$allcases,
            'acts' =>$acts,
            'policy'=>$policy,
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
        $allcases = Story::orderBy('id', 'DESC')->get();
        $case = Story::find($id);
     // Retrieve the latest followup
     $currentfollowup = Followup::where('case_id', $id)->orderBy('id', 'DESC')->first();
     $count = Followup::where('case_id', $id)->count();
     
    
     
    //  dd($count);

     // Retrieve all followups excluding the latest one
     if ($currentfollowup) {
         $followup = Followup::where('case_id', $id)
                              ->where('id', '<', $currentfollowup->id) // Exclude the latest one
                              ->orderBy('id', 'DESC')
                              ->get();
     } else {
         $followup = []; // If no followup found, set an empty array
     }

        return view('website.case.show')->with([
            'case' => $case,
            'cases' => $allcases,
            'followups' => $followup,
            'currentfollowup' => $currentfollowup
            
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
