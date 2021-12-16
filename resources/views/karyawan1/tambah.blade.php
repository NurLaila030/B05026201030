@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'DATA KARYAWAN')
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

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <br/>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="Nama" required="required">
        </div>
        <div class="form-group">
            <label for="Pangkat">Pangkat:</label>
            <input type="text" name="Pangkat" required="required">
        </div>
        <div class="form-group">
            <label for="Gaji">Gaji:</label>
            <input type="number" name="Gaji" required="required">
        </div>

		<button type="submit" class=" btn-primary">Simpan Data</button>

	</form>

</body>
@endsection
