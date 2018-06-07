<?php
include 'include/koneksi.php';
con_db();
$query = "SELECT * FROM  `iklan`  WHERE status='1' ORDER BY tgl_iklan DESC";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <style>
        .background{
            background: url('include/img/none.png')center #FFFFFF;
            -webkit-background-size: 8%;
            -moz-background-size: 8%;
            background-size: 8%;
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
                      <a href="#" class="glyphicon glyphicon-user dropdown-toggle" data-toggle="dropdown">  PANDUAN <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="tutorial/aturan.php" class="fa   fa-file">  Aturan </a></li>
                          <li><a href="tutorial/aturan2.php" class="fa  fa-lock">  Aturan 2 </a></li>
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
	  
      <div class="content-wrapper background">
        <div class="container">
          <section class="content-header">
            <h1></h1>
          </section>
          <section class="content">
              <div class="row">
                  <?php
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                <div class="col-md-4">
                  <div class="box box-widget">
                    <div class='box-header with-border'>
                      <div class='user-block'>
                        <img class='img-circle' src='dist/img/user1-128x128.jpg' alt='user image'>
                        <span class='username'><a href="user/ikut_lelang.php?id_iklan=<?php echo $row['id_iklan']; ?>","><?php echo $row['judul_iklan']; ?></a></span>
                        <span class='description'>Admin : <?php echo $row['tgl_iklan']; ?></span>
                      </div>
                    </div><!-- /.box-header -->
                    <div class='box-body'>                        
                       
                        <br>
                        <a href="file/<?php echo $row['file_iklan']; ?>" class="btn btn-md btn-info pull-left">Download Lampiran</a>
                        <a disable href="user/ikut_lelang.php?id_iklan=<?php echo $row['id_iklan']; ?>" class="btn btn-md btn-info pull-right">Ikut Lelang</a>
                    </div>
                    
                    <!-- /.box-footer -->
                  </div><!-- /.box -->
                </div><!-- /.col -->  
                <?php } ?>
              </div>
          </section>          
            
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
	  
      <footer class="main-footer">
        <div class="container">
		
        <!-- page footer holder -->
        <div class="page-footer-holder page-footer-holder-main">

            <div class="row">

                <!-- about -->
                <div class="col-md-4">
                    <h3>TENTANG E-PROC</h3>
                    <p style="text-align: justify">e-Proc DAMRI adalah e-Procurement di lingkungan DAMRI untuk sarana pengadaan barang/jasa, informasi pengadaan antar Unit DAMRI, sesuai dengan Pedoman pengadaan barang/jasa yang berlaku di PERUM DAMRI yang dilakukan secara online/elektronik dengan menggunakan fasilitas aplikasi e-Proc DAMRI.</p>
                </div>
                <!-- ./about -->

                <!-- quick links -->
                <div class="col-md-4">
                    <h3>QUICK LINKS</h3>

                    <div class="list-links">
                        <a href="/portal/home">Beranda</a>  <br>
                        <a href="/portal/tentang">Tentang Kami</a><br>
                        <a href="/portal/faq">FAQ's</a><br>
                        <a href="/portal/registrasi">Registrasi</a><br>
                    </div>
                </div>
                <!-- ./quick links -->

                <!-- contacts -->
                <div class="col-md-4">
                    <h3>KONTAK</h3>

                    <div class="footer-contacts">
                        <div class="fc-row">
                            <span class="fa fa-home"></span>
                            Jln. Matraman Raya No. 25 Jakarta Timur,<br>
                            Daerah Khusus Ibukota Jakarta 
                        </div>
                        
                        <div class="fc-row">
                            <span class="fa fa-envelope"></span>
                            <strong>e-Proc</strong><br>
                            <a href="mailto:#">humas@damri.co.id</a>
                        </div>
                        <div class="fc-row">
                            <span class="fa fa-phone"></span>
                            <strong>Customer Service</strong><br>
                            <i>1500-825</i>
                        </div>
                    </div>
                </div>
                <!-- ./contacts -->

            </div>

        </div>
        <!-- ./page footer holder -->
    
          <div class="pull-right hidden-xs">
          </div>
          <strong>Copyright &copy; <a href="#"> luthfi</a></strong>
        </div><!-- /.container -->
      </footer>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/jquery-ui.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/js/app.min.js"></script>
  </body>
</html>
