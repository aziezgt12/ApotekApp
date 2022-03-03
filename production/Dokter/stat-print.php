<?php include '../../koneksi.php';
session_start();

if(!isset($_SESSION['username'])){
die(

 header('location:../../index.html')
);

}

if($_SESSION['akses']!="Dokter"){
header("location:../../error/page_403.html");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laporan Stok</title>
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">





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
  <?php $date = date("Y-m-d") ?>


          <?php

          $tgl_awal   = $_GET['awal'];
          $tgl_akhir  = $_GET['akhir'];

          $tanggalawal = date('Y-m-d', strtotime($tgl_awal));
          $tanggalakhir = date('Y-m-d', strtotime($tgl_akhir));

?>
<br>
<br>
<strong><h3 align="center"><b>Statistik Penjualan  </h3></strong>
<h4 align="center"><?php echo tgl_indo($tanggalawal)  ?> - <?php echo tgl_indo($tanggalakhir) ?></b></h4>

<br>
                   <table id="" class="table table-bordered">
                            <?php
                              $sql=mysql_query("SELECT * FROM statis_lap WHERE tgl BETWEEN '$tgl_awal' AND '$tgl_akhir'");
                            ?>
                    <thead>
                        <tr bgcolor="#DCDCDC">
                          <th width="2%"> No </th>
                          <th width="9%"> Kode Obat </th>
                          <th width="50%"> Nama Obat </th>
                          <th width="12%">Jumlah Transaksi</th>
                          <th width="10%">Jumlah Terjual</th>
                          </tr>
                    </thead>
                      <?php
                        $no=1;
                      while ($data=mysql_fetch_array($sql)) 
                      { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>OB-00<?php echo $data['kode'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td align="center"><?php echo $data['total_terjual'] ?></td>
                        <td align="center"><?php echo $data['jumlah'] ?></td>
                      </tr>
                        <?php } ?>


</div>
                    </tbody>
                    </table>
                    <table border="0" width="100%">
                      <tr>
                        <td height="10px" width="25"></td>
                        <td width="50%"></td>
                        <td width="25%" align="center">Pekanbaru, <?php echo tgl_indo($date) ?><br><br> Hormat Kami</td>
                      </tr>
                        <td height="100px"></td>
                        <td></td>
                        <td></td>
                      </tr>
                     <tr>
                        <td ></td>
                        <td></td>

                        <td align="center">(___________________)</td>
                      </tr>
                      <tr>


                    </table>
              
                    <?php echo "<script>window.print()</script>"; ?>





<script src="../../build/js/custom.min.js"></script>
  </body>
</html>


        
