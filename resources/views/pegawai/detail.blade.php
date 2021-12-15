@extends('layout.ceria')

@section('isikonten')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Detail Data Pegawai')
<head>

</head>
<body>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <div class="form-group">
        <label for="Nama" class="col-md-2 col-sm-4 control-label">Nama:</label>
        <label class="control-label">{{ $p->pegawai_nama }}</label>
    </div>
    <div class="form-group">
        <label for="Jabatan" class="col-md-2 col-sm-4 control-label">Jabatan:</label>
        <label class="control-label">{{ $p->pegawai_jabatan }}</label>
    </div>
    <div class="form-group">
        <label for="Umur" class="col-md-2 col-sm-4 control-label">Umur:</label>
        <label class="control-label">{{ $p->pegawai_umur }}</label>
    </div>
    <div class="form-group">
        <label for="Alamat" class="col-md-2 col-sm-4 control-label">Alamat:</label>
        <label class="control-label">{{ $p->pegawai_alamat }}</label>
    </div>
	@endforeach


</body>
@endsection
