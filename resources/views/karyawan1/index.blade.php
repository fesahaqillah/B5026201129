@extends('layout.ceria')

@section('title', 'DATA KARYAWAN 1')

@section('isikonten')

@section('judulhalaman', 'KARYAWAN')

    <br>
	<table class="table table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $a)
		<tr>
			<td>{{ $a->NIP }}</td>
			<td>{{ $a->Nama }}</td>
			<td>{{ $a->Pangkat }}</td>
            <td>Rp. {{ number_format($a->Gaji) }}</td>
			<td>
				<a href="/karyawan1/edit/{{ $a->NIP }}" class= "btn btn-primary btn-sm" role="button">Edit</a>
				|
				<a href="/karyawan1/detail/{{ $a->NIP }}" class="btn btn-default">View</a>
			</td>
		</tr>
		@endforeach
	</table>

    @endsection
