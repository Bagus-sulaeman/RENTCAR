<?php

namespace App\Http\Controllers;

use App\Renter;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('renters.daftar');
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
     * @param  \App\Renter  $tambah
     * @return \Illuminate\Http\Response
     */
    public function show(Renter $Renter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Renter  $tambah
     * @return \Illuminate\Http\Response
     */
    public function edit(Renter $Renter )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Renter  $Renter 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renter $Renter )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Renter  $Renter 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renter $Renter )
    {
        //
    }
}
