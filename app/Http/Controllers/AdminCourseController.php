<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
       public function index() {
        return view('pages.Admin.daftarCourse.daftarCourse', [
            'users' => course::all(),
            'title' => 'Data Course'
        ]);
    }
    public function add() {
        return view('pages.Admin.daftarCourse.addDataCourse',[
            'title' => 'Tambah Data Course'
        ]);
    }
    // public function edit($id){

    //     $peserta = User::where('id', $id)->first();

    //     return view('editdatapeserta', [
    //         'peserta' => $peserta,
    //         'title' => 'Edit Data peserta'
    //     ]);

    // }

    // public function update(Request $request, $id) {
    //     $nama_peserta      = $request->input('nama_peserta');
    //     $jenis_kelamin       = $request->input('jenis_kelamin');
    //     $tempat_lahir   = $request->input('tempat_lahir');
    //     $tanggal_lahir = $request->input('tanggal_lahir');
    //     $alamat = $request->input('alamat');
    //     $tinggi_badan = $request->input('tinggi_badan');

    //     $peserta = User::where('id', $id)->first();
    //     $peserta->nama_peserta    = $nama_peserta;
    //     $peserta->jenis_kelamin     = $jenis_kelamin;
    //     $peserta->tempat_lahir = $tempat_lahir;
    //     $peserta->tanggal_lahir = $tanggal_lahir;
    //     $peserta->alamat = $alamat;
    //     $peserta->tinggi_badan = $tinggi_badan;

    //     $peserta->save();

    //     return redirect()->to('/peserta');
    // }


    // public function dashboard(){
    //     $peserta= User::count();

    //     return view('main', compact('peserta'));

    // }

    // public function store(Request $request) {
    //     $nama_peserta      = $request->input('nama_peserta');
    //     $jenis_kelamin       = $request->input('jenis_kelamin');
    //     $tempat_lahir   = $request->input('tempat_lahir');
    //     $tanggal_lahir = $request->input('tanggal_lahir');
    //     $alamat = $request->input('alamat');
    //     $tinggi_badan = $request->input('tinggi_badan');
    //     // TODO: Compare $password and $rePassword

    //     $peserta           = new User;
    //     $peserta->nama_peserta    = $nama_peserta;
    //     $peserta->jenis_kelamin     = $jenis_kelamin;
    //     $peserta->tempat_lahir = $tempat_lahir; // Don't forget to encryp!s
    //     $peserta->tanggal_lahir = $tanggal_lahir;
    //     $peserta->alamat = $alamat;
    //     $peserta->tinggi_badan = $tinggi_badan;

    //     $peserta->save();

    //     return redirect()->to('/peserta');
    // }
    // public function delete($id) {
    //     $peserta = User::where('id', $id)->first();
    //     $peserta->delete();
    //     return redirect()->back();
    // }

}
