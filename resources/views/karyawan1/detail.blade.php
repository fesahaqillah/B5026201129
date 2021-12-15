@extends('layout.ceria')

@section('title', 'DATA KARYAWAN 1')

@section('isikonten')

@section('judulhalaman', 'VIEW KARYAWAN')
<br>

	<a href="/karyawan1" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)

		NIP Karyawan <label type="text" required="required" name="NIP" value="{{ $k->NIP }}" class="form-control"> {{ $k->NIP }}</label><br/>
		Nama Karyawan <label type="text" required="required" name="Nama" value="{{ $k->Nama }}" class="form-control"> {{ $k->Nama }}</label><br/>
		Pangkat Karyawan <label type="text" required="required" name="Pangkat" value="{{ $k->Pangkat }}" class="form-control"> {{ $k->Pangkat }}</label><br/>
		Gaji Karyawan <label required="required" name="tersedia" name="Gaji" value="{{ $k->Gaji }}" class="form-control">Rp. {{ number_format($k->Gaji) }}</label> <br/>

	@endforeach


@endsection
