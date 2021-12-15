@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA MASKER')
<head>

</head>
<body>


	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    @foreach($masker as $s)
        <div class="form-group">
            <label for="merkmasker"class="control-label">Merk Masker:</label>
            <label class="control-label">{{ $s->merkmasker }}</label>
        </div>
		<div class="form-group">
            <label for="stockmasker"class="control-label">Stock Masker:</label>
            <label class="control-label">{{ $s->stockmasker }}</label>
        </div>
        Tersedia
        <label name="tersedia"class="control-label">Tersedia</label>
        <label class="control-label">{{ $s->tersedia === "Y"}}</label>
        <label for="tidak"class="control-label">Tidak Tersedia</label>
        <label class="control-label">{{ $s->tersedia === "T"}}</label>

    </form>
	@endforeach


    @endsection
