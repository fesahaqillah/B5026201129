@extends('layout.ceria')

@section('title', 'KARYAWAN 1')

@section('isikonten')

@section('judulhalaman', 'EDIT DATA KARYAWAN')

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	@foreach($karyawan1 as $p)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
		NIP <input type="text" required="required" name="NIP" value="{{ $p->NIP }}" class="form-control"> <br/>
		Nama <input type="text" required="required" name="Nama" value="{{ $p->Nama }}" class="form-control"> <br/>
		Pangkat <input type="text" required="required" name="Pangkat" value="{{ $p->Pangkat }}" class="form-control"> <br/>
		Gaji <input type="text" required="required" name="Gaji" value="{{ $p->Gaji }}" class="form-control"> <br/>
		<center> <input type="submit" value="Simpan Data" class="btn btn-primary"> </center>
	</form>
	@endforeach

@endsection
