@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Masker')
@section('judulhalaman', 'DATA MASKER')
<head>

</head>
<body>

	<a href="/masker/tambah"class="btn btn-primary" role:"button"> + Tambah Data Masker</a>

	<br/>
	<br/>
<div class="container" align="center">
    <p>Cari Data masker berdasarkan Merk:</p>
    <form action="/masker/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Masker .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>
    <table class="table table-striped">
		<tr class="table-info">
			<th>Merk Masker</th>
			<th>Stock Masker</th>
            <th>tersedia</th>
            <th>Opsi</th>
		</tr>
    @foreach($masker as $s)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $s->merkmasker }}</td>
			<td>{{ $s->stockmasker }}</td>
            <td>{{ $s->tersedia }}</td>
            <td>
                <a href="/masker/detail/{{ $s->kodemasker }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/masker/edit/{{ $s->kodemasker }}" class="btn btn-warning">Edit</a>
				|
				<a href="/masker/hapus/{{ $s->kodemasker}}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $masker->links() }}

</body>
@endsection

