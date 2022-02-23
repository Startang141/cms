<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
    return "
        NIM     : 2041720130
        <br>
        Nama    : Bintang Adiyatma Agung Putra
        <br>
        Kelas   : TI-2G";
    }   
}