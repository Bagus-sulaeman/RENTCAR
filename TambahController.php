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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'nik' => 'required',
        'phone' => 'required',
        'alamat' => 'required'
        ]);

        Tambah::create([
        'nama' => $request->nama,
        'nik' => $request->nik,
        'phone' => $request->phone,
        'alamat' => $request->alamat
        ]);

        return redirect('/daftar');
        // $tambah = new Tambah;
        // $tambah -> nama = $request->nama;
        // $tambah -> nik = $request->nik;
        // $tambah -> phone = $request->phone;
        // $tambah -> alamat = $request->alamat;  
        // $tambah->save();
        
        // return redirect('/daftar');
    }
}
