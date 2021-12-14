@extends('layout.ceria')

@section('title', 'KERTAS HVS')

@section('isikonten')

@section('judulhalaman', 'DETAIL KERTAS HVS')
<br>

	<a href="/kertashvs" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($kertashvs as $k)

		Kode Kertas HVS <label type="text" required="required" name="kodekertashvs" value="{{ $k->kodekertashvs }}" class="form-control"> {{ $k->kodekertashvs }}</label><br/>
		Merk Kertas HVS <label type="text" required="required" name="merkkertashvs" value="{{ $k->merkkertashvs }}" class="form-control"> {{ $k->merkkertashvs }}</label><br/>
		Stock Kertas HVS <label type="number" required="required" name="stockkertashvs" value="{{ $k->stockkertashvs }}" class="form-control"> {{ $k->stockkertashvs }}</label><br/>
		Ketersediaan <label required="required" name="tersedia" class="form-control">{{ $k->tersedia }}</label> <br/>

	@endforeach


@endsection
