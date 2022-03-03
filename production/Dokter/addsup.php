<?php include '../../koneksi.php';


$nama          = $_POST['nama'];
$suplier       = $_POST['suplier'];
$lokasi        = $_POST['lokasi'];
$telp          = $_POST['telp'];
$email         = $_POST['email'];
$alamat        = $_POST['alamat'];


mysql_query ("

INSERT INTO `db_apotek`.`suplier`
            (`kode`,
             `nama`,
             `kota`,
             `telp`,
             `email`,
             `alamat`)
VALUES ('',
        '$nama',
        '$lokasi',
        '$telp',
        '$email',
        '$alamat');


	");
header("location:suplier.php");

 ?>
 