<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
        public function karir(){
            return "Ini adalah halaman <b>program karir</b>";
        }
    
        public function magang(){
            return "Ini adalah halaman <b>program magang</b>";
        }
    
        public function kunjunganIndustri(){
            return "Ini adalah halaman <b>program kunjungan industri</b>";
        }
    }