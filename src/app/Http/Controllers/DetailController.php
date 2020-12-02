<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function tampil_detail_mahasiswa(){
        return view("user.detail");
    }
}
