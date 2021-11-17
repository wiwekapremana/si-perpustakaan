<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function indexbuku()
	{
    	// mengambil data dari tabelbuku
		$buku = DB::table('buku')->get();

    	// mengirim dataKaryawan ke view index
		return view('tampilanbuku',['buku' => $buku]);

	}

	// method untuk menampilkan view form tambahbuku
	public function tambahbuku()
	{

		// memanggil view tambah
		return view('tambahbuku');

	}

	// method untuk insert data ke tablebuku
	public function storebuku(Request $request)
	{
		// insert data ke tableKaryawan
		DB::table('buku')->insert([
			'judul_buku' => $request->judul_buku,
			'pengarang' => $request->pengarang,
			'penerbit' => $request->penerbit,
			'tahun_terbit' => $request->tahun_terbit,
            'tebal' => $request->tebal,
            'isbn' => $request->isbn,
            'stok_buku' => $request->stok_buku,
            'biaya_sewa_harian' => $request->stok_buku,
		]);
		
		// alihkan halaman ke halamanbuku
		return redirect('/tampilanbuku');

	}

	// method untuk edit databuku
	public function editbuku($id)
	{
		// mengambil databuku berdasarkan id yang dipilih
		$buku = DB::table('buku')->where('id',$id)->get();
		// passing dataBuku yang didapat ke view editbuku.blade.php
		return view('editbuku',['buku' => $buku]);

	}

	// update databuku
	public function update(Request $request)
	{
		// update databuku
		DB::table('buku')->where('id',$request->id)->update([
            'judul_buku' => $request->judul_buku,
			'pengarang' => $request->pengarang,
			'penerbit' => $request->penerbit,
			'tahun_terbit' => $request->tahun_terbit,
            'tebal' => $request->tebal,
            'isbn' => $request->isbn,
            'stok_buku' => $request->stok_buku,
            'biaya_sewa_harian' => $request->biaya_sewa_harian,
		]);
		// alihkan halaman ke tampilanbuku
		return redirect('/tampilanbuku');
	}

	// method untuk hapus databuku
	public function hapusbuku($id)
	{
		// menghapus databuku berdasarkan id yang dipilih
		DB::table('buku')->where('id',$id)->delete();
		return redirect('/tampilanbuku')->with('status', 'Data Berhasil Dihapus!');	}
}