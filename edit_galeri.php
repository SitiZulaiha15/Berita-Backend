<?php
include "koneksi.php";
$id = $_GET['url'];
$sql = mysqli_query($con, "SELECT * FROM tb_galeri where id_galeri ='$id'");
while($row = mysqli_fetch_array($sql)){
  ?>
<!DOCTYPE html>
<head>
  <title>Portal Berita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/style-responsive.css" rel="stylesheet"/>
  <!-- font CSS -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="css/font.css" type="text/css"/>
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <!-- //font-awesome icons -->
  <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
  <section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
      <!--logo start-->
      <div class="brand">

        <a href="index.php" class="logo">
         Berita
       </a>
       <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
      </div>
    </div>
    <!--logo end-->

    <div class="nav notify-row" id="top_menu">
      <!--  notification start -->
      <ul class="nav top-menu">

      </ul>
      <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
      <!--search & user info start-->
      <ul class="nav pull-right top-menu">
        <li>
          <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <img alt="" src="images/1.png">
            <span class="username">SITI ZULAIHA</span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout">
            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
            <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
          </ul>
        </li>
        <!-- user login dropdown end -->

      </ul>
      <!--search & user info end-->
    </div>
  </header>
  <!--header end-->
  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse">
      <!-- sidebar menu start-->
      <div class="leftside-navigation">
        <ul class="sidebar-menu" id="nav-accordion">
          <li>
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-bullhorn"></i>
              <span>GALERI</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              <span>ARTIKEL</span>
            </a>
          </li>
        </ul>            </div>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
            Input Data Galeri
          </div>
  <form role="form" method="post" action="proses_galeri.php?url=<?php echo 
  $row['id_galeri']?>" enctype="multipart/form-data">
    <div class="form-group">
      <label>Judul Gambar</label>
      <input type="text"  name="txt_judul" value="<?php echo $row['judul']?>" class="form-control" placeholder="Enter text">
    </div>
    <div class="form-group">
    <label>Deskripsi</label>
    <textarea name="txt_des" class="form-control" required="" placeholder="Masukan Deskripsi..."><?php echo $row['deskripsi']?></textarea>
  </div>
    <div class="form-group">
      <label>File Gambar</label>
      <input type="file" name="file_gambar" accept="image/*" >
      <img src="images/<?php echo $row['gambar']?>" style="width: 100px">
      <input type="hidden" name="gambar" value="<?php echo $row['gambar']?>">
    </div>
    <button type="submit" class="btn btn-primary" name="btn_edit">Simpan</button>

  </form>
    
     </div>
     <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
<!-- footer -->
<div class="footer">
 <div class="wthree-copyright">
   <p>Website Berita</a></p>
 </div>
</div>
<!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<?php } ?>