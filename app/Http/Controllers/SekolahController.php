<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sekolahController extends Controller
{
    public function index(){
        return view('sekolah.index');
    }
}
