<html>
    <head>
        <style>
            *{
            box-sizing: border-box;
        }
        p{
            margin-left: 40px;
            padding:left ;
        }
        form {
            padding-bottom: 16px;
            background: white;
            border: 1px solid #c1c1c1;
            margin-top: 150px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        form input {
            margin-bottom: 1rem;
            background: #fff;
            border: 1px solid #9c9c9c;
        }
        form button {
            background: lightgrey;
            padding: 0.7em;
            border: 0;
            margin: 40px;
            margin-right: 5%;
        }
        label {
            text-align-last: justify;
            padding: 0.5em 3.5em 0.3em 2;
            float: left;
            width: 200px;
            margin-left: 50px;
        }
        button {
            width: 30%;
            margin-bottom: 0.5px;

        }
        input{
            width: 45%;
            float:left;
        }
        .btn-primary{
            background: blue;
            color: white;
        }
        .btn-success{
            background: #00ff00;
        }

        </style>
    </head>
    <body>
        <form action="https://www.google.com/" method="get">
            <p>
                Nur Laila
                <br>
                Laila
                <br>
                5026201030
            </p>
            <center><h3>Form Pendaftaran Kuota Internet</h3></center>
            <div class="form-group ">
                <label for="Nama Mahasiswa">Nama Mahasiswa  :</label>
                <input type="text" class="form-control" id="Nama Mahasiswa" pattern="[A-Za-z].{2,}"required >
            </div>
            <div class="form-group ">
                <label for="NRP Mahasiswa">NRP Mahasiswa    :</label>
                <input type="number" class="form-control" id="NRP Mahasiswa" pattern="[0-9].{9,}"required >
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan    :</label>
                <input list="jurusan" name="jurusan" required>
                <datalist id="jurusan">
                    <option >Sistem Informasi</option>
                    <option >Elektro</option>
                    <option >Informatika</option>
                </datalist>
            </div>
            <div class="form-group ">
                <label for="Nomor Handphone">Nomor Handphone    :</label>
                <input type="number" class="form-control" id="Nomor Handphone" pattern="[0-9].{9,}"required >
            </div>
            <button type="submit" class=" btn-primary">Kirim</button>
            <button type="reset" class="btn btn-success btn-lg">Reset</button>
        </form>
    </body>
</html>
