<?php
session_start();
include '../../koneksi.php';
include 'page/format.php';

date_default_timezone_set("Asia/Jakarta");


$LastID=FormatNoTrans(OtomatisID());
$use=$_SESSION['username'];
$kode12 = $_POST['kode_obat'];

    $disc = $_POST['diskon'];
    $qty = $_POST['qty'];

    $tanggal        = date("y-m-d");

$f1o=mysql_query("select * from tb_obat where kode='$kode12'");
while($data=mysql_fetch_array($f1o))
 {
    $nm_obat = $data['nama'];
    $hjual = $data['jual'];
    $stok  = $data['stok'];



$que=mysql_query("select subtotal, count(id) as total, sum(qty) as upqty from temp where kode_obat='$kode12'");
while($data1=mysql_fetch_array($que))
{
    $total = $data1['total'];
    $upqty = $data1['upqty'];
    
    $h_awal = $data1['subtotal'];

    $tot_qty = $qty+$upqty;
    $qtyup = $upqty+$qty;
    $sub = $hjual*$qtyup;
    @$harga_dis = (($sub*$disc)/100);
    $bayar = $sub-$harga_dis;                   
}}


$updatestok = $stok-$qty;

if ($qty <= $stok) :
    if ($total==0 ) {
        $sql = mysql_query("INSERT INTO `db_apotek`.`temp`
            (`id`,
             `kode_obat`,
             `harga`,
             `diskon`,
             `qty`,
             `subtotal`,nama, pot)

                VALUES ('$LastID',
                        '$kode12',
                        '$hjual',
                        '$disc',
                        '$qty',
                        '$bayar', '$nm_obat' ,'$harga_dis');");
       
       $query5 = mysql_query("UPDATE tb_obat SET stok='$updatestok' WHERE kode='$kode12'");
    } else {
        $update = $qty+$upqty;
       $query4 = mysql_query("UPDATE temp SET qty='$update', subtotal='$bayar' WHERE kode_obat='$kode12' ");
       $query5 = mysql_query("UPDATE tb_obat SET stok='$updatestok' WHERE kode='$kode12'");
    //
      // $query5 = mysql_query("UPDATE barang SET stok='$upstok' WHERE kode_barang='$kode12' ");
    }else :  
    echo "<script type='text/javascript'>alert('Stok Tidak Cukup')</script>";
    
endif;

echo "<script>document.location.href='penjualan.php';</script>";
 
?>