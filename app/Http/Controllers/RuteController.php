<?php

namespace App\Http\Controllers;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function menampilkanData()
    {
        return view('RuteController');
    }
    public function menampilkanDataModel()
    {
        $sekolah = rute::$sekolah;
        $sekolah = rute::$kelas;
        return view('rutemodel');
    }
    
}