<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function layout()
    {
        return view ('index');
    }
    public function index()
    {
        // mengambil data dari tabelMahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        // mengirim dataMahasiswa ke view index
        return view('tampilanmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    // method untuk menampilkan view form tambahMahasiswa
    public function tambahmahasiswa()
    {

        // memanggil view tambahmahasiswa
        return view('tambahmahasiswa');
    }

    // method untuk insert data ke tableMahasiswa
    public function store(Request $request)
    {
        // insert data ke tableMahasiswa
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'no_telp' => $request->no,
            'prodi' => $request->prodi,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
        ]);

        // alihkan halaman ke halamanMahasiswa
        return redirect('/tampilanmahasiswa');
    }

    // method untuk edit dataMahasiswa
    public function editmahasiswa($id)
    {
        // mengambil dataMahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        // passing dataMahasiswa yang didapat ke view editmahasiswa.blade.php
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    // update dataMahasiswa
    public function update(Request $request)
    {
        // update dataMahasiswa
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'no_telp' => $request->no,
            'prodi' => $request->prodi,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
        ]);
        // alihkan halaman ke tampilanMahasiswa
        return redirect('/tampilanmahasiswa');
    }

    // method untuk hapus dataMahasiswa
    public function hapus($id)
    {
        // menghapus dataMahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/tampilanmahasiswa')->with('status', 'Data Berhasil Dihapus!');
    }
}
