@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA MASKER')
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


	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    @foreach($masker as $s)
	<form action="/masker/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodemasker" value="{{ $s->kodemasker }}"> <br/>
        <div class="form-group">
            <label for="merkmasker">Merk Masker:</label>
            <input type="text" required="required" name="merkmasker" value="{{ $s->merkmasker }}">
        </div>
		<div class="form-group">
            <label for="stockmasker">Stock Masker:</label>
            <input type="number" required="required" name="stockmasker" value="{{ $s->stockmasker }}">
        </div>
        Tersedia
        <input type="radio" id="tersedia" name="tersedia" value="Y" @if ($s->tersedia === "Y") checked="checked" @endif>
        <label name="tersedia">Tersedia</label>
        <input type="radio" id="tidak" name="tersedia" value="T" @if ($s->tersedia === "T") checked="checked" @endif>
        <label for="tidak">Tidak Tersedia</label><br>

        <button type="submit" class=" btn-primary">Simpan Data</button>

    </form>
	@endforeach


    @endsection
