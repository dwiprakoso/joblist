<?php

namespace App\Http\Controllers;

class adminController extends Controller
{
    public function index()
    {     
        return view('admin.index'); // Tambahkan variabel baru ke view
    }
    public function verificationRecruiter()
    {
        return view('admin.verificationRecruiter'); // Tambahkan variabel baru ke view
    }
}
