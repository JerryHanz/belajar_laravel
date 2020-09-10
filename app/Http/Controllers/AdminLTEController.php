<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLTEController extends Controller
{
    //
    public function index(){
        $judul = "Admin Page";
        $fname = "Avian";
        $lname = "Hermana";
        
        return view ('AdminLTE/index',['judul' => $judul, 'fname' => $fname, 'lname' => $lname]);
    }
}
