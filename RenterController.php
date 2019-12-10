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
        $renter = Renter::all();
        return view('renters.daftar',['renter' => $renter]);
    }

}
