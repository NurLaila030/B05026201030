@extends('layout.ceria')

@section('title', 'ABSEN MUTASI')

@section('isikonten')

@section('judulhalaman', 'EDIT MUTASI')

<head>
	<title>DATA MUTASI</title>
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

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
        <div class="form-group">
            <label for="ID Pegawai">ID Pegawai:</label>
            <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}">
        </div>
        <div class="form-group">
            <label for="Departemen">Departemen:</label>
            <input type="text" required="required" name="Departemen" value="{{ $m->Departemen }}">
        </div>
        <div class="form-group">
            <label for="Sub Departemen">Sub Departemen:</label>
            <input type="text" required="required" name="SubDepartemen" value="{{ $m->SubDepartemen }}">
        </div>
        <div class="form-group">
            <label for="Mulai Bertugas">Mulai Bertugas:</label>
            <input type="datetime-local" required="required" name="MulaiBertugas"{{ $m->MulaiBertugas }}>
        </div>

		<button type="submit" class=" btn-primary">Simpan Data</button>
	</form>
	@endforeach


</body>
@endsection
