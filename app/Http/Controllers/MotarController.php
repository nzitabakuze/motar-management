<?php

namespace App\Http\Controllers;

use App\Models\Motar;
use Illuminate\Http\Request;

class MotarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $motars = Motar::latest()->paginate(5);

    

        return view('motars.index',compact('motars'))

            ->with('i', (request()->input('page', 1) - 1) * 5);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motars.create'); //
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

            'FirstName' => 'required',

            'LastName' => 'required',
            'IDno' => 'required',
            'motor_id' => 'required',
            'status' => 'required',
            'Gender' => 'required',
            'village' => 'required',
            'sector' => 'required',
            'District' => 'required',
            'categories' => 'required',
            'cooperative_Name' => 'required',

        ]);

    echo "<br><br><br><br><center><h1>You Have successfully Joined Our cooperative</h1></center>"; 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motar  $motar
     * @return \Illuminate\Http\Response
     */
    public function show(Motar $motar)
    {
       return view('motars.show',compact('motar')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motar  $motar
     * @return \Illuminate\Http\Response
     */
    public function edit(Motar $motar)
    {
       return view('motars.edit',compact('motar')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motar  $motar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motar $motar)
    {
        $request->validate([

            'FirstName' => 'required',

            'LastName' => 'required',
            'IDno' => 'required',
            'motor_id' => 'required',
            'status' => 'required',
            'Gender' => 'required',
            'village' => 'required',
            'sector' => 'required',
            'District' => 'required',
            'categories' => 'required',
            'cooperative_Name' => 'required',
            

        ]);

    

        $motar->update($request->all());

    

        return redirect()->route('motars.index')

                        ->with('success','Motar updated successfully'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motar  $motar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motar $motar)
    {
       $motar->delete();

    

        return redirect()->route('motars.index')

                        ->with('success','Motar deleted successfully');  //
    }
}
