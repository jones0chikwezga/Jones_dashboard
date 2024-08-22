<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatModel;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $allstats = StatModel::all();

        $counter = count($allstats);

        

        return view('admin.stats.index')->with([
            'stats' => $allstats,
            'counter' => $counter
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
        $request->validate([
            'district' => 'required|numeric',
            'people' => 'required|numeric',
            'goal' => 'required|numeric',
            'raised' => 'required|numeric',
        ]);

        $stats = ([
            'district' => $request->district,
            'people' => $request->people,
            'goal' => $request->goal,
            'raised' => $request->raised,
        ]);
       
        StatModel::create($stats);

         return redirect('/stats')->with(['message' => 'Created Successfully']);
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
        $request->validate([
            'district' => 'required|numeric',
            'people' => 'required|numeric',
            'goal' => 'required|numeric',
            'raised' => 'required|numeric',
        ]);

        $stats = StatModel::where('id',$id) 
        ->update([
            'district' => $request->district,
            'people' => $request->people,
            'goal' => $request->goal,
            'raised' => $request->raised,
        ]);
       
       

         return redirect('/stats')->with(['message' => 'Updated Successfully']);
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
