<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.Admin.Dashboard');
    }

    public function adminUser()
    {
        return view('pages.Admin.daftarUser.daftarUser');
    }

    public function adminCourse()
    {
        return view('pages.Admin.daftarCourse.daftarCourse',[
            'users' => course::all(),
            'title' => 'Data Course'
        ]);
    }

    public function addCourse()
    {
        return view('pages.Admin.daftarCourse.addCourse',[
            'title' => 'Tambah Data Course'
        ]);
    }


}
