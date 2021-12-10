@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')
<br>

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        Jabatan
		Nama <input type="text" name="nama" class="form-control"> <br/>
        Jabatan <input type="text" name="jabatan" class="form-control"> <br/>
        Umur <input type="number" name="umur" class="form-control"> <br/>
		Alamat <textarea name="alamat" class="form-control"></textarea> <br/>
        <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
	</form>

@endsection
