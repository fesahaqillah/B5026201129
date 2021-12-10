@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN PEGAWAI')
<br>

	<a href="/absen" class="btn btn-secondary"> Kembali</a>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        Pegawai <select class="form-control mt-2" id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
            @endforeach
        </select><br>

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
                <input type="radio" class="form-check-input" id="hadir" name="Status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                <label for="hadir">HADIR</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="tidak" name="Status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                <label for="tidak">TIDAK HADIR</label><br>
            </div>

            <center> <input type="submit" value="Simpan Data" class="btn btn-primary"> </center>
	</form>
	@endforeach
    @endsection
