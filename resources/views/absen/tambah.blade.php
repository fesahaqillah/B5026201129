@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')
<br>

	<a href="/absen" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        Pegawai
        <select id="IDPegawai" name="IDPegawai" required="required" class="form-control">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>

        {{-- Tanggal --}}
        <div class="form-group">
            <label for="datetimepicker" class="control-label">Tanggal </label>
                <div class=' input-group date ' id='datetimepicker'>
                    <input type='text' required="required" class="form-control" name="Tanggal" />
                    <span class="input-group-addon input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </span>
                </div>
            </div>

		Status
        <div class="form-check mt-2">
            <input type="radio" class="form-check-input" id="hadir" name="Status" value="H">
            <label for="hadir">HADIR</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tidak" name="Status" value="T" checked="checked">
            <label for="tidak">TIDAK HADIR</label><br>
        </div>

		<center> <input type="submit" value="Simpan Data" class="btn btn-primary"> </center>
	</form>
    @endsection

