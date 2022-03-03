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


<div class="ln_solid"></div>
          <?php
          $tgl_awal   = $_GET['awal'];
          $tgl_akhir  = $_GET['akhir'];

          $tanggalawal = date('Y-m-d', strtotime($tgl_awal));
          $tanggalakhir = date('Y-m-d', strtotime($tgl_akhir));

?>
<br>
<br>
<strong><h3 align="center"><b>Data Penjualan  </h3></strong>
<h4 align="center"><?php echo tgl_indo($tanggalawal)  ?> - <?php echo tgl_indo($tanggalakhir) ?></b></h4>

<br>

    <table id="" class="table table-keytable">


    <thead>
      <tr>
        
      </tr>
    </thead>
      <?php
       $sql = mysql_query("select * from penjualan where tgl between '$tgl_awal' and '$tgl_akhir'") ?>
    <tbody>
      <?php $no=1; while ($data = mysql_fetch_array($sql)) { 
        $a = $data['id'];
      ?>

      <tr>
        <td rowspan="4" colspan="4"><h1>NO : <?php echo $no++; ?></h1></td>
      </tr>
      <tr bgcolor="#DCDCDC">
        <td colspan="1">No Faktur</td>
        <td>: <?php echo $data['id'] ?></td>

      </tr>
      <tr bgcolor="#DCDCDC">
        <td colspan="1">Pembeli</td>
        <td>: <?php echo $data['customer'] ?></td>

      </tr>
      <tr bgcolor="#DCDCDC">
        <td  colspan="1">Tgl</td>
        <td>: <?php echo tgl_indo($data['tgl']) ?></td>
<?php $ab = mysql_query("select * from detail, tb_obat where tb_obat.kode = detail.kode_obat and id='$a'") ?>

      </tr>
      <tr bgcolor="#2F4F4F">
        <td width="10%">Kode</td>
        <td width="40%">Nama Obat</td>
        <td width="15%">Harga</td>
        <td width="10%">Qty</td>
        <td width="10%">Diskon</td>
        <td width="20%">Subtotal</td>
      </tr>
      <?php while ($dt = mysql_fetch_array($ab)) { ?>
      <tr>
        <td>OB-00<?php echo $dt['kode_obat'] ?></td>
        <td><?php echo $dt['nama'] ?></td>
        <td>Rp. <?php echo  number_format($dt['harga']) ?>,00,-</td>
        <td><?php echo $dt['qty'] ?></td>
        <td><?php echo $dt['diskon'] ?> % </td>
        <td>Rp. <?php echo number_format($dt['subtotal']) ?>,00,-</td>
      </tr>
    <?php } ?>
    <?php 
      $ac = mysql_query("SELECT * FROM penjualan WHERE id='$a'")    ?>

      <tr bgcolor="#DCDCDC">
        <td colspan="4" rowspan="2"></td>
        <td>Total Harga</td>
        <?php while ($dr = mysql_fetch_array($ac)) { ?>
        <td>: Rp. <?php echo number_format($dr['total_harga']) ?>,00,-</td>
      <?php } ?>
      </tr>
      <?php $ad = mysql_query("select count(id) as totcont from detail where id='$a' ")?>
      <tr bgcolor="#DCDCDC">
        <td>Total Item</td>
        <?php while ($dy = mysql_fetch_array($ad)) { ?>
        <td>: <?php echo $dy['totcont'] ?> Item</td>
      <?php } ?>
      </tr>

      <tr>
        <td height="40px" colspan="6" ></td>
      </tr>

      <?php } ?>
      <?php $my = mysql_query("select sum(total_harga) as total from penjualan where tgl between '$tgl_awal' and '$tgl_akhir' "); ?>
      <tr>
      <?php while ($a = mysql_fetch_array($my)) { ?>
      <td colspan="6" align="right"><h4><b>Total Penjualan Bulan Ini : Rp. <?php echo number_format($a['total']) ?>,00,-</b></h4></td>
      <?php } ?>
      </tr>      

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


        
