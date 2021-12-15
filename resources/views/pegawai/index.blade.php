@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')
<head>

</head>
<body>

	<a href="/pegawai/tambah"class="btn btn-primary" role:"button"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
<div class="container" align="center">
    <p>Cari Data Pegawai berdasarkan Nama:</p>
    <form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>
	<table class="table table-striped">
		<tr class="table-info">
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

</body>
@endsection
