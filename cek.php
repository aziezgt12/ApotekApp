<?php
session_start();
mysql_connect("localhost","root","") or die("koneksi gagal");
mysql_select_db("db_apotek");//sesuaikan dengan nama database anda
$username  = $_POST['username'];
$psw       = $_POST['password'];
$op        = $_GET['op'];

if($op=="in"){

$cek = mysql_query("SELECT * FROM db_user WHERE username='$username' AND password='$psw'");


if(mysql_num_rows($cek)==1)
{
	$c = mysql_fetch_array($cek);
	$_SESSION['username'] = $c['username'];
	$_SESSION['akses'] = $c['akses'];
	
	if($c['akses']=="Adminstrator"){
		header("location:production/admin/home.php");
	}else if($c['akses']=="Dokter"){
	header("location:production/dokter/home.php");
	}else if($c['akses']=="Apoteker"){
	header("location:production/apoteker/home.php");
	}else if($op=="out"){
	unset($_SESSION['username']);
	unset($_SESSION['akses']);
	header("location:index.php");
}
}else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan login kembali');
            document.location='index.html';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['akses']);
    header("location:index.html");
}
?>