@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Karyawan1')
@section('judulhalaman', 'DATA KARYAWAN1')
<head>

</head>
<body>

	<a href="/karyawan1/tambah"class="btn btn-primary" role:"button"> + Tambah Karyawan</a>

	<br/>
	<br/>
    <div class="container" align="center">
        <p>Cari Data Karyawan berdasarkan Nama dan Pangkat:</p>
        <form action="/karyawan1/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
            <input class="form-control btn-success" type="submit" value="CARI">
        </form>
        <table class="table table-striped">
            <tr class="table-info">
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Opsi</th>
            </tr>
            @foreach($karyawan1 as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
            <td>{{ $k->Gaji }}</td>
			<td>
                <a href="/karyawan1/detail/{{ $k->NIP }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/karyawan1/edit/{{ $k->NIP }}" class="btn btn-warning">Edit</a>
				|
				<a href="/karyawan1/hapus/{{ $k->NIP }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan1->links() }}

</body>
@endsection
