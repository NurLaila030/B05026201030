<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <style>
        .header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 50px;
            color: white;
        }

        .body{
            margin-top: 30px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 30px;
            font-family:'Gill Sans', 'Gill Sans MT', Arial, 'Trebuchet MS', sans-serif;
            font-size: 100px;
        }

        .footer {
            text-align: right;
        }

        .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color:  #b3ccff;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color:black;
          display: block;
          transition: 0.3s;
        }

        .sidebar a:hover {
          color:whitesmoke;

        }

        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 30px;
          margin-left: 50px;
        }

        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color:#0080ff;
          color: white;
          padding: 10px 15px;
          border: none;
        }

        .openbtn:hover {
          background-color: #444;
        }

        #main {
          transition: margin-left .2s;
          padding: 16px;
          height: 680px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
    </style>
</head>
<body>

    <header>
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">

                <button class="openbtn" onclick="openNav()">☰</button>
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <h4>
                            Nur Laila <br>
                        </h4>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

          </div>
    </header>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="p-4 pt-7">
            <center><img src="/gambar/Nur Laila.JPEG" class="img logo rounded-circle mb-5" width="95" height="95">
              <h2>
                Nur Laila <br>
                (5026201030)
            </h2></center>
        <ul class="list-unstyled components mb-5">
            <li>
                <a href="/pegawai">Pegawai</a>
            </li>
            <hr>
          <li>
            <a href="/absen">Absen</a>
          </li>
          <hr>
            <li>
            <a href="/mutasi">Mutasi</a>
            </li>
            <hr>
            <li>
            <a href="#">Minggu Depan</a>
            </li>
            <hr>
            <li>
                <a href="/masker">Praktikum</a>
            </li>
            <hr>
          </ul>

        </div>
        </--####### Footer #######-->
        <footer id="footer" class="footer">
        <div class="copyright">
        <h6>
           &copy; Hak Cipta oleh 5026201030 - Nur Laila
        </h6>
        </div>
          </footer>
        </--####### End Footer #######-->

    </div>

    <div class="container">

    <div id="main">
        <h2>@yield('judulhalaman')</h2>

        @section('isikonten')
        @show
    </div>

    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "100px";
    }
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    </div>

</body>
</html>
