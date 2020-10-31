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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function edit(batch_type $batch_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, batch_type $batch_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\batch_type  $batch_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(batch_type $batch_type)
    {
        //
    }
}
