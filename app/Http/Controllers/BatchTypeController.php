<?php

namespace App\Http\Controllers;

use App\batch_type;
use Illuminate\Http\Request;

class BatchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/admin_add_batch_type');
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
        $res = new batch_type();
        $res->batch_name=$request->input('b_name');
        $res->start_time=$request->input('s_time');
        $res->end_time=$request->input('e_time');
        $res->purpose=$request->input('b_purpose');
        $res->save();
        return redirect("admin/view_batch_type");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function show(batch_type $batch_type)
    {
        //
        return view('admin/admin_view_batch_type')->with('data',batch_type::all());    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function edit(batch_type $batch_type,$id)
    {
        //
        
        return view('admin/update_batch_type')->with('data',batch_type::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, batch_type $batch_type,$id)
    {
        //
        $res = batch_type::find($request->id);
        $res->batch_name=$request->input('b_name');
        $res->start_time=$request->input('s_time');
        $res->end_time=$request->input('e_time');
        $res->purpose=$request->input('b_purpose');
        $res->save();
        return redirect('/admin/view_batch_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(batch_type $batch_type,$id)
    {
        //
        batch_type::destroy(array('id',$id));
        return redirect('admin/view_batch_type');
    }
}
