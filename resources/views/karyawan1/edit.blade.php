@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'EDIT KARYAWAN')
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

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->NIP }}"> <br/>
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" required="required" name="nama" value="{{ $k->Nama }}">
        </div>
		<div class="form-group">
            <label for="Pangkat">Pangkat:</label>
            <input type="text" required="required" name="Pangkat" value="{{ $k->Pangkat }}">
        </div>
        <div class="form-group">
            <label for="Gaji">Gaji:</label>
            <input type="number" required="required" name="Gaji" value="{{ $k->Gaji }}">
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
