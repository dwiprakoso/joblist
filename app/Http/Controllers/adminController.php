<?php

namespace App\Http\Controllers;

use App\Models\companies;

class adminController extends Controller
{
    public function index()
    {     
        return view('admin.index'); // Tambahkan variabel baru ke view
    }
    public function verificationRecruiter()
    {
        $companies = companies::with('users', 'contact')->get();
        return view('admin.verificationRecruiter', compact('companies'));
    }

    public function verifyCompany(companies $company)
    {
        $company->status = 'verified';
        $company->save();
        
        return redirect()->back()->with('success', 'Company has been verified successfully!');
    }
    public function rejectCompany(companies $company)
    {
        $company->status = 'rejected';
        $company->save();
        
        return redirect()->back()->with('success', 'Company has been rejected.');
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
