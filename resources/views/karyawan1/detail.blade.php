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
        <div class="form-group">
            <label for="Nama"class="control-label">Nama:</label>
            <label class="control-label">{{ $k->Nama }}</label>
        </div>
		<div class="form-group">
            <label for="Pangkat"class="control-label">Pangkat:</label>
            <label class="control-label">{{ $k->Pangkat }}</label>
        </div>
        <div class="form-group">
            <label for="Gaji"class="control-label">Gaji:</label>
            <label class="control-label">{{ $k->Gaji }}</label>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
