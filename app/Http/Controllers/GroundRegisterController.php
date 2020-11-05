<?php

namespace App\Http\Controllers;

use App\ground_register;
use App\batch_type;
use Illuminate\Http\Request;

class GroundRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(batch_type $batch_type)
    {
        //
        return view('admin/admin_add_ground_booking')->with('data',batch_type::all());
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
        // $res=new ground_register();
        $res=new ground_register();
        $res->name=$request->input('grname');
        $res->email=$request->input('gremail');
        $res->contact=$request->input('grcnumber');
        $res->purpose=$request->input('grpurpose');
        $res->fdate=$request->input('grfdate');
        $res->days=$request->input('grdays');
        $res->amount=$request->input('gramount');
        $res->uid=$request->input('gruid');
        $res->status=$request->input('grstatus');
        $res->save();
        return redirect('admin/view_ground_booking');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ground_register  $ground_register
     * @return \Illuminate\Http\Response
     */
    public function show(ground_register $ground_register)
    {
        //
        return view('admin/admin_view_ground_booking')->with('data',ground_register::all());   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ground_register  $ground_register
     * @return \Illuminate\Http\Response
     */
    public function edit(ground_register $ground_register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ground_register  $ground_register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ground_register $ground_register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ground_register  $ground_register
     * @return \Illuminate\Http\Response
     */
    public function destroy(ground_register $ground_register,$id)
    {
        ground_register::destroy(array('id',$id));
        return redirect('admin/view_ground_booking');

    }
}
