<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        // mengambil semua nama siswa
        foreach (Siswa::all() as $siswa) {
            echo $siswa ->nama . "<br>";
        }
    }
}
