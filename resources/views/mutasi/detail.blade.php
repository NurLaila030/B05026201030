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
        <div class="form-group">
            <label for="ID Pegawai"class="control-label">ID Pegawai:</label>
            <label class="control-label">{{ $m->IDPegawai }}</label>
        </div>
        <div class="form-group">
            <label for="Departemen"class="control-label">Departemen:</label>
            <label class="control-label">{{ $m->Departemen }}</label>
        </div>
        <div class="form-group">
            <label for="Sub Departemen"class="control-label">Sub Departemen:</label>
            <label class="control-label">{{ $m->SubDepartemen }}</label>
        </div>
        <div class="form-group">
            <label for="Mulai Bertugas"class="control-label">Mulai Bertugas:</label>
            <label class="control-label">{{ $m->MulaiBertugas }}</label>
        </div>

	</form>
	@endforeach


</body>
@endsection
