<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function siswa()
    {
        return view('siswa.siswa');
    }

    public function siswa_tambah()
    {
        return view('siswa.siswatambah');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }
}
