@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')

    <div>
	<a href="/absen/tambah" class="btn btn-info" > + Tambah Absen</a>

    <div align='right'>
        <div>
            <form action="/absen/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
                <input class="btn-success" type="submit" value="CARI">
            </form>
        </div>
    </div>
    </div>

    <br>
	<table class="table table-hover">
		<tr>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}" class= "btn btn-primary btn-sm" role="button">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class= "btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $absen->links() }}
    @endsection
