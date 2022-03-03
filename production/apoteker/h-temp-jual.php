<?php include '../../koneksi.php';
$kode=$_GET['kode'];
$f1o2=mysql_query("select * from tb_obat where kode='$kode'");
while($data2=mysql_fetch_array($f1o2))
 {   $stok = $data2['stok'];  }

$f1o=mysql_query("select * from temp where kode_obat='$kode'");
while($data=mysql_fetch_array($f1o))
 {   $qty = $data['qty'];  }
$upstok = $stok+$qty;

       $query4 = mysql_query("UPDATE tb_obat SET stok='$upstok' WHERE kode='$kode' ");


mysql_query("delete from temp where kode_obat='$kode'");
header("location:penjualan.php");

?>