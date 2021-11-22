<html>
    <head>
        <title>Perhitungan Angka Faktorial</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".submit").click(function(){
                    var mskangka = $(".angka").val();

                })
            })
        </script>
        <style>
            h2{
                margin-top: 10px;
            }
            form {
                background-color:rgb(245, 245, 157);
                padding-bottom: 16px;
                align-items:center;
                justify-content: center;
                padding: 30px;
                margin-top: 150px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;


            }
            form input {
                width: 400px;
                    text-align:right;
                    margin-right: 20px;
                    font-size: 20px;
            }
            form button {
                background: lightgrey;
                padding: 0.7em;
                border: 0;
                margin: 40px;
                margin-right: 5%;
            }
            label {
                width: 400px;
                text-align:center;
                margin-right: 20px;
                font-size: 20px;
                margin-top: 20px;

            }
            button{
                width: 150px

            }
        </style>
    </head>
    <body>
        <form action="faktorial" method="post"  name="perhitunganangkafaktorial">
            @csrf
           <center><h2>Perhitungan Angka Faktorial</h2></center>
            <form action="hitung.php" method="POST">
            <div class="row mt-1">
                <div class="col -3">
                    <label>Masukkan Angka</label>
                </div>
                <div class="col-3">
                    <input name="mskangka" class="angka" type="text" size="50" required>
                </div>
            </div>
                <button type="submit" name="hitung">Hitung</button>
              </form>
    </body>
</html>
