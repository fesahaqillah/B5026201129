@extends('layout.ceria')

@section('title', 'KERTAS HVS')

@section('isikonten')

@section('judulhalaman', 'EDIT KERTAS HVS')
<br>

	<a href="/kertashvs" class="btn btn-secondary"> Kembali</a>

	@foreach($kertashvs as $p)
	<form action="/kertashvs/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodekertashvs }}"> <br/>
		kodekertashvs <input class="form-control" type="text" required="required" name="kodekertashvs" value="{{ $p->kodekertashvs }}"> <br/>
		merkkertashvs <input class="form-control" type="text" required="required" name="merkkertashvs" value="{{ $p->merkkertashvs }}"> <br/>
		stockkertashvs <input class="form-control" type="number" required="required" name="stockkertashvs" value="{{ $p->stockkertashvs }}"> <br/>
        <div class="mb-3">
            <label class="form-label">Ketersediaan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="t" name="tersedia" value="T" @if($p->tersedia==='T')checked="checked" @endif required>
                <label class="form-check-label" for="Tersedia">
                TERSEDIA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="k" name="tersedia" value="K" @if($p->tersedia==='K')checked="checked" @endif checked="checked" required>
                <label class="form-check-label" for="Kosong">
                KOSONG
                </label>
              </div>
            </div>
        <center> <input type="submit" value="Simpan Data" class="btn btn-primary"> </center>
	</form>
	@endforeach

    @endsection
