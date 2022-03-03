<?php
session_start();
include '../../koneksi.php';
include 'page/format.php';
$LastID=FormatNoTrans(OtomatisID());
date_default_timezone_set("Asia/Jakarta");


$exec11 = mysql_query("select sum(subtotal) as total, sum(pot) as pot from temp");
while($row11 	= mysql_fetch_assoc($exec11))
{    
	$total 		= $row11['total']; 
	$pot 		= $row11['pot'];
	}
	$tanggal    = date("y-m-d");
	$pelanggan  = $_POST['pelanggan'];

	$pelanggan  = $_POST['pelanggan'];
	$bayar      = $_POST['bayar'];
	$kembali	= $bayar - $total;

$LastID=FormatNoTrans(OtomatisID());

$query=mysql_query("

INSERT INTO `db_apotek`.`penjualan`
            (`id`,
             `customer`,
             `tgl`,
             `total_harga`,
             `total_bayar`,
             `kembali`, diskon)
		
		VALUES ('$LastID',
		        '$pelanggan',
		        '$tanggal',
		        '$total',
		        '$bayar',
		        '$kembali','$pot')

		        ");




$que12=mysql_query("INSERT INTO detail (id, kode_obat, harga,diskon, qty, subtotal, pot) 
SELECT id, kode_obat,harga,  diskon, qty, subtotal, pot FROM temp");

$que2=mysql_query("DELETE FROM `temp`");
      
header("location:struk.php?kode=$LastID");




 
?>