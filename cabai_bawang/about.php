<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php"><button type="button" class="btn btn-success btn-block">BERANDA</button></a></p>
      <p><a href="diagnosa.php"><button type="button" class="btn btn-success btn-block">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-success btn-block">DAFTAR PENYAKIT</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-success btn-block active">ABOUT</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
      <p><button type="button" class="btn btn-warning btn-block" id="myBtn">LOGIN</button></p>
    </div>
    <div class="col-sm-8 text-left" style="font-family: garamond; margin: 80px; margin-top: 20px"> 
      <center><h2>ABOUT</h2></center><br>
      <div class="panel panel-success">
      <div class="panel-heading"></div>
      <div class="panel-body">
        Aplikasi sistem pakar ini dibuat oleh:
        <br> Eli Nurhayati&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNPM. 20082010115
        <br> Silvy Milda Puspita&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNPM. 20082010116
        <br> Angga Pornama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNPM. 20082010125
        <br> Rama Arya Chandra&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNPM. 20082010135
        <br> Anindita Pratita&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNPM. 20082010139
        <br> Isyana Valda Choirila V.&nbsp&nbsp&nbspNPM. 20082010142
        <br><br> Dengan tujuan untuk memnuhi UAS (Ujian Akhir Semester) mata kuliah Sistem Pendukung Keputusan, kelas pararel A. 
      </div>
    </div>
    </div>
  </div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-warning btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>
    </div>
  </div> 

  <br><br><br><br><br>
<footer class="container-fluid text-center" style="height: 45px; background-color: #000000;">
  <p>Eli, Silvy, Angga, Rama, Anindita, Isyana</p>
</footer>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
