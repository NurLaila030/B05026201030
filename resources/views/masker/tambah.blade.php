@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Masker')
@section('judulhalaman', 'DATA MASKER')
<head>
<style>
    form {
            padding-bottom: 16px;
            background: #d1e0e0;
            border: 1px solid #c1c1c1;
            margin-top: 2rem;
            max-width: 400px;

        }form input {
            margin top: 2rem;
            margin-bottom: 1rem;
            background: #fff;
            border: 1px solid #9c9c9c;
            margin-right: 30px;
        }form button {
            background: lightgrey;
            padding: 0.7em;
            border: 0;
            margin: 32px;
            margin-right: 5%;
        }
        form button:hover {
            background: blue;
        }

</style>
</head>
<body>

	<a href="/masker"> Kembali</a>

	<br/>
	<br/>
    <form action="/masker/store" method="post">
		{{ csrf_field() }}
        <br/>
        <div class="form-group">
            <label for="merkmasker">Merk Masker:</label>
            <input type="text" name="merkmasker" required="required">
        </div>
        <div class="form-group">
            <label for="stockmasker">Stock Masker:</label>
            <input type="number" name="stockmasker" required="required">
        </div>
        <div class="form-check-inline">
            Tersedia:
            <input type="radio" id="tersedia" name="tersedia" value="Y">
            <label for="hadir">Tersedia</label>
            <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
            <label for="tidak">Tidak tersedia</label><br>
        </div><br>
        <button type="submit" class=" btn-primary">Simpan Data</button>
	</form>

</body>
@endsection
