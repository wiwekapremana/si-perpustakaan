<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function indextransaksi()
    {
        // mengambil data dari tabelMahasiswa
        $transaksi = DB::table('transaksi')
        ->join('mahasiswa', 'mahasiswa.id', '=', 'transaksi.id_mahasiswa')
        ->join('buku', 'buku.id', '=', 'transaksi.id_buku')
        ->get();

        // mengirim datatransaksi ke view index
        return view('tampilantransaksi', ['transaksi' => $transaksi]);
    }

    // method untuk menampilkan view form tambahtransaksi
    public function tambahtransaksi()
    {

        // memanggil view tambahtransaksi
        return view('tambahtransaksi');
    }

    // method untuk insert data ke tabletransaksi
    public function storetransaksi(Request $request)
    {
        // insert data ke tabletransaksi
        DB::table('transaksi')->insert([
            'id_mahasiswa' => $request->id_mahasiswa,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status_pinjam' => $request->status_pinjam,
            'total_biaya' => $request->total_biaya,
        ]);
     
        // alihkan halaman ke halamantransaksi
        return redirect('/tampilantransaksi');
    }

 
    
    // method untuk edit datatransaksi
    public function edittransaksi($id)
    {
        // mengambil datatransaksi berdasarkan id yang dipilih
        $transaksi = DB::table('transaksi')->where('id', $id)->get();
        // passing datatransaksi yang didapat ke view edittransaksi.blade.php
        return view('edittransaksi', ['transaksi' => $transaksi]);
    }

    // update datatransaksi
    public function update(Request $request)
    {
        // update datatransaksi
        DB::table('transaksi')->where('id', $request->id)->update([
            'id_mahasiswa' => $request->id_mahasiswa,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->pinjam,
            'tanggal_kembali' => $request->kembali,
            'status' => $request->status,
            'total_biaya' => $request->total,
        ]);
        // alihkan halaman ke tampilantransaksi
        return redirect('/tampilantransaksi');
    }

    // method untuk hapus datatransaksi
    public function hapustransaksi($id)
    {
        // menghapus datatransaksi berdasarkan id yang dipilih
        DB::table('transaksi')->where('id', $id)->delete();
        return redirect('/tampilantransaksi')->with('status', 'Data Berhasil Dihapus!');
    }
}
