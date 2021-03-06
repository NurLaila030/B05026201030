@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')
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

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <br/>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required="required">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" name="jabatan" required="required">
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" required="required">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required="required"></textarea>
        </div>

		<button type="submit" class=" btn-primary">Simpan Data</button>

	</form>

</body>
@endsection
