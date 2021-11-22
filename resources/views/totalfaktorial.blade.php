<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>
</h2>
  <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h3>Perhitungan Faktorial:</h3>
    <div class="row mt-3">
        <div class="col-5">
            <label>Masukkan Angka</label>
        </div>
        <div class="col-5">
            <?php echo $_POST["mskangka"] ; ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-5">
            <label>Hasil Faktorial</label>
        </div>
        <div class="col-5">
            <?php
            $number = $_POST["mskangka"];
            $result = 1;
            $arr_faktorial = [];

            if($number <0){
              echo "The number is negative";
            }else{
              for($i=1; $i <= $number; $i++){
                $result = $result*$i;
                array_push($arr_faktorial, $i);
              }
            }
            $detail = array_reverse($arr_faktorial);
            $detail = join(" x ", $detail);

            echo "$number! = $detail = $result";

          ?>
        </div>
    </div>

</div>

</body>
</html>
