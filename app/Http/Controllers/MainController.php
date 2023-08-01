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
        return view('siswa');
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
