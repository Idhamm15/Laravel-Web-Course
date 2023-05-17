<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
       public function index() {
        return view('pages.Admin.daftarCourse.index', [
            'users' => course::all(),
            'title' => 'Data Course'
        ]);
    }

    public function add() {
        return view('pages.Admin.daftarCourse.add',[
            'title' => 'Tambah Data Course'
        ]);
    }

    public function store(Request $request) {
        $name      = $request->input('name');
        $harga      = $request->input('harga');
        $status   = $request->input('status');
        $deskripsi = $request->input('deskripsi');
        // $alamat = $request->input('alamat');
        // $tinggi_badan = $request->input('tinggi_badan');
        // TODO: Compare $password and $rePassword

        $course           = new course;
        $course ->name    = $name;
        $course->harga     = $harga;
        $course->status = $status; // Don't forget to encryp!s
        $course->deskripsi= $deskripsi;
        // $peserta->alamat = $alamat;
        // $peserta->tinggi_badan = $tinggi_badan;

        $course->save();

        return redirect()->to('/daftar-course');
    }

    public function edit($id){

        $course = course::where('id', $id)->first();

        return view('pages.Admin.daftarCourse.edit', [
            'course' => $course,
            'title' => 'Edit Data course'
        ]);

    }

    public function update(Request $request, $id) {
        $name      = $request->input('name');
        $harga      = $request->input('harga');
        $status   = $request->input('status');
        $deskripsi = $request->input('deskripsi');

        $course = course::where('id', $id)->first();
        $course ->name    = $name;
        $course->harga     = $harga;
        $course->status = $status; // Don't forget to encryp!s
        $course->deskripsi= $deskripsi;

        $course->save();

        return redirect()->to('/daftar-course');
    }

    public function delete($id) {
        $peserta = course::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }
}
