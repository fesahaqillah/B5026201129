<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$karyawan1 = DB::table('karyawan1')->get();

    	// mengirim data karyawan1 ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);

    }

    // method untuk edit data karyawan1
	public function edit($NIP)
	{
		// mengambil data karyawan1 berdasarkan NIP yang dipilih
		$karyawan1 = DB::table('karyawan1')->where('NIP',$NIP)->get();
		// passing data karyawan1 yang didapat ke view edit.blade.php
        $karyawan1 = DB::table('karyawan1')->orderBy('Nama', 'asc')->get();
		return view('karyawan1.edit',['karyawan1' => $karyawan1,'karyawan1' => $karyawan1]);

	}

	// update data karyawan1
	public function update(Request $request)
	{
		// update data karyawan1
		DB::table('karyawan1')->where('NIP',$request->NIP)->update([
			'NIP' => $request->NIP,
			'Nama' => $request->Nama,
			'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
		]);
		// alihkan halaman ke halaman karyawan1
		return redirect('/karyawan1');
	}

}
