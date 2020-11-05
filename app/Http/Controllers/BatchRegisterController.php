<?php

namespace App\Http\Controllers;

use App\batch_register;
use App\batch_type;
use Illuminate\Http\Request;

class BatchRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(batch_type $batch_type)
    {
        //
        return view('admin/admin_add_batch_register')->with('data',batch_type::all());
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
        $res=new batch_register();
        $res->name=$request->input('brname');
        $res->email=$request->input('bremail');
        $res->contact=$request->input('brcnumber');
        $res->batch_type=$request->input('brbtype');
        $res->batch_time=$request->input('brbtime');
        $res->fdate=$request->input('brfdate');
        $res->days=$request->input('brdays');
        $res->amount=$request->input('bramount');
        $res->uid=$request->input('bruid');
        $res->status=$request->input('brstatus');
        $res->save();
        return redirect('admin/view_batch_register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\batch_register  $batch_register
     * @return \Illuminate\Http\Response
     */
    public function show(batch_register $batch_register)
    {
        //
        return view('admin/admin_view_batch_register')->with('data',batch_register::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\batch_register  $batch_register
     * @return \Illuminate\Http\Response
     */
    public function edit(batch_register $batch_register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\batch_register  $batch_register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, batch_register $batch_register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\batch_register  $batch_register
     * @return \Illuminate\Http\Response
     */
    public function destroy(batch_register $batch_register)
    {
        //
    }
}
