@extends('layout.ceria')

@section('title', 'KERTAS HVS')

@section('isikonten')

@section('judulhalaman', 'TAMBAH HERTAS HVS')

	<a href="/kertashvs" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/kertashvs/store" method="post">
		{{ csrf_field() }}
		kode kertas hvs <input class="form-control" type="text" name="kodekertashvs" required="required"> <br/>
		merk kertas hvs <input class="form-control" type="text" name="merkkertashvs" required="required"> <br/>
		stock kertas hvs<input class="form-control" type="number" name="stockkertashvs" required="required"> <br/>
        <div class="mb-3">
            <label class="form-label">Ketersediaan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="t" name="tersedia" value="T" required>
                <label class="form-check-label" for="Tersedia">
                 TERSEDIA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="k" name="tersedia" value="K" checked="checked" required>
                <label class="form-check-label" for="Kosong">
                  KOSONG
                </label>
              </div>
            </div>
        <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
	</form>

@endsection
