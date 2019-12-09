<?php

namespace App\Http\Controllers;

use App\Tambah;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tambah.home');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambah = Tambah::all();
        return view('tambah.home',['tambah'=> $tambah]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Tambah;
        $tambah->nama = $request->nama;
        $tambah->nik = $request->nik;
        $tambah->phone = $request->phone;
        $tambah->alamat = $request->alamat;
        
        $tambah->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function show(Tambah $tambah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function edit(Tambah $tambah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tambah $tambah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tambah  $tambah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tambah $tambah)
    {
        //
    }
}
