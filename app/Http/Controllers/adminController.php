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
    public function analisisSistem()
    {
        return view('admin.analisisSistem'); // Tambahkan variabel baru ke view
    }
    public function kelolaSistem()
    {
        return view('admin.kelolaSistem'); // Tambahkan variabel baru ke view
    }
    public function kelolaAdministrasi()
    {
        return view('admin.kelolaAdministrasi'); // Tambahkan variabel baru ke view
    }
}
