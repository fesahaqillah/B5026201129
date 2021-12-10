@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT PEGAWAI')

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control"> <br/>
		Alamat <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea> <br/>
		<center> <input type="submit" value="Simpan Data" class="btn btn-primary"> </center>
	</form>
	@endforeach

@endsection
