<?php include '../../koneksi.php';
session_start();

if(!isset($_SESSION['username'])){
die(

 header('location:../../index.html')
);

}

if($_SESSION['akses']!="Adminstrator"){
header("location:../../error/page_403.html");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FATHAN JAYA</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendors/bootstrap-datetimepicker.css" />
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->

<script src="js/js/my.js" type="text/javascript"></script>
<script src="js/js/jquery.min.js" type="text/javascript"></script>
<script src="js/js/highcharts.js" type="text/javascript"></script>
    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },
         title: {
            text: 'Grafik Penjualan '
         },
         xAxis: {
            categories: ['merek']
         },
         yAxis: {
            title: {
               text: 'Jumlah terjual'
            }
         },
              series:
            [
            <?php
                    $sql   = "SELECT *  FROM grafik";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
              $merek=$ret['namaob'];
                 $sql_jumlah   = "SELECT jumlah_jual FROM grafik WHERE namaob='$merek'";
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jumlah_jual'];
                  }
                  ?>
                  {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });
</script>


<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );


  $pecahkan = explode('-', $tanggal);
  

 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
?>


<?php
date_default_timezone_set("Asia/Jakarta");

$day = date ("D");
switch ($day) {
case 'Sun' : $hari = "Minggu"; break;
case 'Mon' : $hari = "Senin"; break;
case 'Tue' : $hari = "Selasa"; break;
case 'Wed' : $hari = "Rabu"; break;
case 'Thu' : $hari = "Kamis"; break;
case 'Fri' : $hari = "Jum'at"; break;
case 'Sat' : $hari = "Sabtu"; break;
default : $hari = "??";
}

?>


  </head>

   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <?php $a = mysql_query("SELECT * FROM data_apotek");
                    while ($data = mysql_fetch_assoc($a)) { ?>
              <a href="home.php" class="site_title"><i class="fa fa-user"></i> <span><?php echo $data['title'] ?></span></a>
              <?php } ?>
            </div>


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <?php $a = $_SESSION['username']; 
                      $b = mysql_query("SELECT * FROM db_user WHERE username='$a'");
                      while ($data = mysql_fetch_array($b)) {
                ?>

                <h2><?php echo $data['nama'] ?></h2>

              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $data['akses'] ?></h3>
                <ul class="nav side-menu">
                  
                <?php } ?>

                  <li><a href="home.php"><i class="fa fa-dashboard"></i> Dashboard <span class=""></span></a></li>
                  <li><a><i class="fa fa-suitcase"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="data_obat.php">Data Obat</a></li>
                      <li><a href="suplier.php">Data Suplier</a></li>
                      <li><a href="data_user.php">Data User </a></li>
                      <li><a href="kat.php">Data Kategori </a></li>
                      <li><a href="sat.php">Data Satuan </a></li>

                    </ul>
                  </li>
                  <li><a href="transaksi.php"><i class="fa fa-random"></i> Transaksi <span class=""></span></a></li>

                  <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="statistik.php">Statistik Penjualan</a></li>
                      <li><a href="l_jual.php">Penjualan</a></li>
                      <li><a href="l-expire.php">Expired  </a></li>
                      <li><a href="l-stok.php">Stok</a></li>
                    </ul>
                  </li>                 
                  <li><a href="../../logout.php"><i  class="fa fa-sign-out"></i> Log Out <span class=""></span></a></li>
                  </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <?php $ab = $_SESSION['username']; 
                        $ac = mysql_query("SELECT * FROM db_user WHERE username='$ab'");
                        while ($data=mysql_fetch_array($ac)) { 
                  ?>
                    <img src="images/img.jpg" alt=""><?php echo $data['nama'] ?>
                  <?php } ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="../../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->