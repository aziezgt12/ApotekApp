<?php include '../../koneksi.php';


$nama         = $_POST['nama'];
$suplier      = $_POST['suplier'];
$kategori     = $_POST['kategori'];
$satuan       = $_POST['satuan'];
$beli         = $_POST['beli'];
$jual         = $_POST['jual'];
$expire       = $_POST['expired'];
$stok         = $_POST['stok'];


mysql_query ("

INSERT INTO `db_apotek`.`tb_obat`
            (`kode`,
             `nama`,
             `suplierid`,
             `kategori`,
             `satuan`,
             `beli`,
             `jual`,
             `expired`,
             `stok`)
VALUES ('',
        '$nama',
        '$suplier',
        '$kategori',
        '$satuan',
        '$beli',
        '$jual',
        '$expire',
        '$stok');



	");
header("location:data_obat.php");

 ?>
 