<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kertashvsController extends Controller
{
	public function index()
	{
    	// mengambil data dari table kertashvs
		$kertashvs = DB::table('kertashvs')->paginate(4);

    	// mengirim data kertashvs ke view index
		return view('kertashvs.index',['kertashvs' => $kertashvs]);

	}

	// method untuk menampilkan view form tambah kertashvs
	public function tambah()
	{

		// memanggil view tambah
		return view('kertashvs.tambah');

	}

	// method untuk insert data ke table kertashvs
	public function store(Request $request)
	{
		// insert data ke table kertashvs
		DB::table('kertashvs')->insert([
			'kodekertashvs' => $request->kodekertashvs,
			'merkkertashvs' => $request->merkkertashvs,
			'stockkertashvs' => $request->stockkertashvs,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kertashvs
		return redirect('/kertashvs');

	}

	// method untuk edit data kertashvs
	public function edit($id)
	{
		// mengambil data kertashvs berdasarkan id yang dipilih
		$kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
		// passing data kertashvs yang didapat ke view edit.blade.php
		return view('kertashvs.edit',['kertashvs' => $kertashvs]);

	}

	// update data kertashvs
	public function update(Request $request)
	{
		// update data kertashvs
		DB::table('kertashvs')->where('kodekertashvs',$request->kodekertashvs)->update([
			'kodekertashvs' => $request->kodekertashvs,
			'merkkertashvs' => $request->merkkertashvs,
			'stockkertashvs' => $request->stockkertashvs,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kertashvs
		return redirect('/kertashvs');
	}

	// method untuk hapus data kertashvs
	public function hapus($id)
    {
        // menghapus data kertashvs berdasarkan id yang dipilih
        DB::table('kertashvs')->where('kodekertashvs',$id)->delete();

        // alihkan halaman ke halaman kertashvs
        return redirect('/kertashvs');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table kertashvs sesuai pencarian data
		$kertashvs = DB::table('kertashvs')
		->where('merkkertashvs','like',"%".$cari."%")
		->paginate();

    	// mengirim data kertashvs ke view index
		return view('kertashvs.index',['kertashvs' => $kertashvs]);

	}

    public function view($id)
	{
		// mengambil data kertashvs berdasarkan id yang dipilih
		$kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
		// passing data kertashvs yang didapat ke view edit.blade.php
		return view('kertashvs.detail',['kertashvs' => $kertashvs]);

	}

}
