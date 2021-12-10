@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')
<br>

	<a href="/absen/tambah" class="btn btn-info" > + Tambah Absen</a>

	<br/>
	<br/>

	<table class="table table-hover">
		<tr>
			<th>IDPegawai</th>
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
