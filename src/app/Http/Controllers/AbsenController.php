<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    //
    public function tampil_form_absen(){
        return view("absensi.form");
    }
}
