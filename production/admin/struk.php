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
    <title>Struk Penjualan</title>





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


------------------------------------------------------<br>
Apotek Name<br>
Jln. Soehatta, No. B06<br>
------------------------------------------------------<br>
<?php $a = $_SESSION['username']; ?>

Tanggal : <?php echo tgl_indo($date) ?><br>
<?php $sql = mysql_query("select * from db_user where username='$a'");
      while ($d = mysql_fetch_array($sql)) { ?>
Operator : <?php echo $d['nama'];?> (<?php echo $d['akses']?>)<?php } ?><br>
------------------------------------------------------<br>
<?php $get = $_GET['kode']; ?>
<?php
      $sql1 = mysql_query("SELECT *, tb_obat.nama as myobat FROM penjualan, tb_obat, detail WHERE tb_obat.kode=detail.kode_obat AND penjualan.id=detail.id AND penjualan.id='$get'"); 
      while ($s = mysql_fetch_array($sql1)) { ?>
OB-OO<?php echo $s['kode_obat']; ?> - <?php echo $s['myobat'] ?><br>

@<?php echo $s['qty']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s['diskon']?>% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($s['harga'])?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($s['subtotal'])?><br>
<?php } ?>
------------------------------------------------------<br>
<?php $q = mysql_query("SELECT *,penjualan.diskon AS pot, COUNT(detail.id) AS a FROM penjualan,detail  WHERE penjualan.id=detail.id AND penjualan.id='$get'");
while ($h = mysql_fetch_array($q)) {
$a = $h['total_harga'];
$b = $h['pot'];
$c = $a+$b;
 ?>
@<?php echo $h['a'] ?> item<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;<?php echo number_format($c) ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Diskon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;<?php echo number_format($b) ?><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grand Total &nbsp;&nbsp; : &nbsp;<?php echo number_format($a) ?><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tunai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php echo number_format($h['total_bayar']) ?><br>
------------------------------------------------------<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kembali &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php echo number_format($h['kembali']) ?><br>
------------------------------------------------------<br>
<?php } ?>
<br>
<br>
<br>
<br>
------------------------------------------------------<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terimaksih Atas Kunjungannya<br>
<?php echo "<script>window.print()</script>"; ?>





<script src="../../build/js/custom.min.js"></script>
  </body>
</html>


        
