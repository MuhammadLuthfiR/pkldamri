<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profil</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">    
    <style>
        .background{
            background: url('include/img/witra.png')no-repeat #ECF0F5;
            -webkit-background-size: 85%;
            -moz-background-size: 85%;
            background-size: 85%;
        }
    </style>     
  </head>
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
                    <a class="navbar-brand" rel="home" href="index.php" >
                        <img style="max-width:90px; margin-top: -20px;" src="include/img/witra.png">
                    </a>                 
            </div>
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                  <li class="dropdown">
                      <a href="#" class="glyphicon glyphicon-user dropdown-toggle" data-toggle="dropdown">  TUTORIAL <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="tutorial/photoshop.php" class="fa   fa-file">  Photoshop</a></li>
                          <li><a href="tutorial/corel_draw.php" class="fa  fa-lock">  Corel Draw</a></li>
                      </ul>
                  </li>
              </ul>
            </div>  
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="profil.php" class="glyphicon glyphicon-phone-alt">  PROFIL</a></li>
              </ul>
            </div>               
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="user/registrasi.php" class="glyphicon glyphicon-plus-sign">  Daftar</a>
                  </li>                  
                  <li>
                      <a href="login.php" class="glyphicon glyphicon-log-in">  Masuk</a>
                  </li>                  
              </ul>
            </div>
          </div>
        </nav>
      </header>
        <?php
        include 'include/function.php';
        con_db();
        $query_profil = "SELECT * FROM profil";
        $result_profil= mysqli_query($GLOBALS["___mysqli_ston"], $query_profil);
        $row = mysqli_fetch_array($result_profil);
        ?>
      <div class="content-wrapper background">
        <div class="container">
          <section class="content-header">
            <h1></h1>
          </section>
          <section class="content">
              <div class="row">
                <div class="col-md-6">
                  <div class="box box-widget">
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='dist/img/user1-128x128.jpg' alt='user image'>
                        <span class='username'>Nama Perusahaan : <a href="#"><?php echo $row['nama']; ?></a></span>
                        <span class='description'>Jenis Perusahaan : <?php echo $row['jenis']; ?></span>
                        <span class='description'>Berdiri Pada : <?php echo $row['tahun_berdiri']; ?></span>
                      </div>
                    </div>
                    <div class="box-body">
                        Perusahaan <?php echo $row['nama']; ?> adalah Jenis perusahaan <?php echo $row['jenis'] ?>
                        yang berdiri pada <?php echo $row['tahun_berdiri']; ?><br><br>
                        <h3>Alamat</h3>
                        <?php echo $row['alamat']; ?><br><br>
                        <h3>Visi Dan Misi</h3>
                        <?php echo $row['profil']; ?>
                    </div>
              </div>
          </section>          
            
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
          </div>
          <strong>Copyright &copy; <a href="#"> Luthfi</a></strong>
        </div><!-- /.container -->
      </footer>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/jquery-ui.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/js/app.min.js"></script>          
  </body>
</html>
