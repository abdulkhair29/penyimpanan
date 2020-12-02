<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelascotroller extends Controller
{
    //
    public function tampilform(){
        return view ("kelas.form");
    }

    public function tampillist(){
        return view ("kelas.list");
    }
}
