<?php include '../../koneksi.php';


$user          = $_POST['username'];
$nama          = $_POST['nama'];
$pass          = $_POST['pass'];
$akses          = $_POST['akses'];
$t_lahir          = $_POST['tempat_lahir'];
$tgl          = $_POST['tanggal'];
$bulan          = $_POST['bulan'];
$tahun          = $_POST['tahun'];
$jk          = $_POST['jk'];
$lokasi          = $_POST['lokasi'];
$telp          = $_POST['telp'];
$email          = $_POST['email'];
$alamat          = $_POST['alamat'];


mysql_query ("

INSERT INTO `db_apotek`.`db_user`
            (`username`,
             `password`,
             `nama`,
             `akses`,
             `tempat_lahir`,
             `tgl_lahir`,
             `jk`,
             `domisili`,
             `telp`,
             `email`,
             `alamat`)
VALUES ('$user',
        '$pass',
        '$nama',
        '$akses',
        '$t_lahir',
        '$tahun-$bulan-$tgl',
        '$jk',
        '$lokasi',
        '$telp',
        '$email',
        '$alamat');

	");
header("location:data_user.php");

 ?>
 