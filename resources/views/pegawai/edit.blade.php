@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT PEGAWAI')
<head>
    <style>
    form {
        padding-bottom: 16px;
        background: #d1e0e0;
        border: 1px solid #c1c1c1;
        margin-top: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    form input {
        margin top: 2rem;
        margin-bottom: 1rem;
        background: #fff;
        border: 1px solid #9c9c9c;
    }
    form button {
        background: lightgrey;
        padding: 0.7em;
        border: 0;
        margin: 32px;
        margin-right: 5%;
    }
    form button:hover {
        background: blue;
    }
    label {
        text-align: right;
        padding: 0.5em 1.5em 0.5em 0;
        float: left;
        width: 200px;
    }
</style>
</head>
<body>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
		<div class="form-group">
            <label for="Jabatan">Jabatan:</label>
            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
        <div class="form-group">
            <label for="Umur">Umur:</label>
            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat:</label>
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
