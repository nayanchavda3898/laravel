<?php

namespace App\Http\Controllers;

use App\ground_register;
use Illuminate\Http\Request;

class GroundRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/admin_add_ground_booking');
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
     * @param  \App\ground_register  $ground_register
     * @return \Illuminate\Http\Response
     */
    public function show(ground_register $ground_register)
    {
        //
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
    public function destroy(ground_register $ground_register)
    {
        //
    }
}
