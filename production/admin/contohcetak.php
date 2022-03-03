<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
<style type="text/css">
        .container {
            border: 0px solid #000;
            width: 100%;
        }
        .margin {
            margin: 1px 1px 1px 1px;
            border: 0px solid #000;
        }
    </style>
</head>
<body>
  <div class="container">
        <div class="margin">

			<left>

				<p>Apotek ABC<br>			
				<p>Jln. Kaharudin Nasution, No. 18 - Pekanbaru<br>			
				<p>No. Nota<br>			
				<p>Tgl Nota<br>			
				<p>Pembeli<br>			

			</left>
				<p>
				<p align="right">Tgl. Cetak : 19/10/2018 02:10:10 PM			
				<p>-----------------------------------------------------------------------------------<br>			

        
    	</div>
    </div>
	<?php include '../../koneksi.php'; ?>
<left>

</left>

	<script>
		window.print();
	</script>

</body>
</html>