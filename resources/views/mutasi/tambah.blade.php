@extends('layout.ceria')

@section('title', 'DATA MUTASI')

@section('isikonten')

@section('judulhalaman', 'DATA MUTASI')
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

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        <br/>
        <div class="form-group">
            <label for="ID Pegawai">ID Pegawai:</label>
            <input type="number" name="IDPegawai" required="required">
        </div>
        <div class="form-group">
            <label for="Departemen">Departemen:</label>
            <input type="text" name="Departemen" required="required">
        </div>
        <div class="form-group">
            <label for="Sub Departemen">Sub Departemen:</label>
            <input type="text" name="SubDepartemen" required="required">
        </div>
        <div class="form-group">
            <label for="Mulai Bertugas">Mulai Bertugas:</label>
            <input type="datetime-local" name="MulaiBertugas" required="required">
        </div>

		<button type="submit" class=" btn-primary">Simpan Data</button>
	</form>

</body>
@endsection
