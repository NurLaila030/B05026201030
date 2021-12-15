@extends('layout.ceria')

@section('isikonten')
@section('title','Data Mutasi')
@section('judulhalaman','DATA MUTASI')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>DATA MUTASI</title>
</head>
<body>

	<a href="/mutasi/tambah" class="btn btn-primary" > + Tambah Mutasi Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
        <p>Cari Data Pegawai berdasarkan Nama:</p>
        <form action="/mutasi/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input class="form-control btn-success" type="submit" value="CARI">
        </form>
	<table class="table table-striped">
		<tr class="table-info">
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
                <a href="/pegawai/detail/{{ $m->ID }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	{{ $mutasi->links() }}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
