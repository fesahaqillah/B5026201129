@extends('layout.ceria')

@section('title', 'KERTAS HVS')

@section('isikonten')

@section('judulhalaman', 'KERTAS HVS')
    <div>
	<a href="/kertashvs/tambah" class="btn btn-info"> + Tambah Kertas HVS Baru</a>

    <div align='right'>
        <div>
            <form action="/kertashvs/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari kertashvs .." value="{{ old('cari') }}">
                <input class="btn-success" type="submit" value="CARI">
            </form>
        </div>
    </div>
    </div>

    <br>
	<table class="table table-hover">
        	<tr>
            <th>No</th>
			<th>KodeKertasHVS</th>
			<th>MerkKertasHVS</th>
			<th>StockKertasHVS</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>

		</tr>
		@foreach($kertashvs as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->kodekertashvs }}</td>
			<td>{{ $p->merkkertashvs }}</td>
			<td>{{ $p->stockkertashvs }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/kertashvs/detail/{{ $p->kodekertashvs }}" class="btn btn-default">Detail</a>
                |
				<a href="/kertashvs/edit/{{ $p->kodekertashvs}}" class="btn btn-primary">Edit</a>
				|
				<a href="/kertashvs/hapus/{{ $p->kodekertashvs }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $kertashvs->links()  }}

    @endsection
