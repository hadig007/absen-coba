<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index(){
        return view('presensi.masuk');
    }
    public function keluar(){
        return view('presensi.keluar');
    }
}
