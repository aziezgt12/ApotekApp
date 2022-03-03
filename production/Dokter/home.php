<?php include 'page/top.php'; ?>
   
   <div class="right_col" role="main">
    <div class="row tile_count">
<?php $bln = date("m"); ?>
<?php $thn = date("Y"); ?>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <?php $sql = mysql_query("SELECT COUNT(nama) AS total FROM db_user"); ?>
              <span class="count_top"><i class="fa fa-cloud-upload"></i> Total User</span>
              <?php while ($a = mysql_fetch_array($sql)) { ?>
              <div align="center" class="count blue"><?php echo $a['total']; ?></div>
              <?php } ?>
              <span class="count_bottom"><i class="blue"><i class="fa fa-calendr "></i> Total Data Master User </i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <?php $sql = mysql_query("SELECT COUNT(kode) AS total FROM suplier"); ?>
              <span class="count_top"><i class="fa fa-user"></i> Total Suplier</span>
              <?php while ($a = mysql_fetch_array($sql)) { ?>
              <div align="center" class="count"><?php echo $a['total'] ?></div>
              <?php } ?>
              <span class="count_bottom"><i class="green"><i class="fa fa-calendr "></i>Total Data Master Suplier</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <?php $sql = mysql_query("SELECT COUNT(kode) AS total FROM tb_obat"); ?>
              <span class="count_top"><i class="fa fa-cloud-download"></i>Total Obat</span>
              <?php while ($a = mysql_fetch_array($sql)) { ?>
              <div align="center" class="count red"><?php echo $a['total'] ?></div>
            <?php } ?>
              <span class="count_bottom"><i class="blue"><i class="fa fa-calendr "></i>Total Data Master Obat</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <?php $sql = mysql_query("SELECT COUNT(kode) AS total FROM tb_obat WHERE MONTH(expired) = '$bln' AND YEAR(`expired`)='$thn'"); ?>
              <span class="count_top"><i class="fa fa-cloud-download"></i> Total Expired Obat</span>
              <?php while ($a = mysql_fetch_array($sql)) { ?>
              <div align="center" class="count green"><?php echo $a['total'] ?></div>
            <?php } ?>
              <span class="count_bottom"><i class="green"><i class="fa fa-calendr "></i>Akan Expire Bulan Ini</i></span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <?php $sql = mysql_query("SELECT SUM(total_harga) AS total FROM penjualan WHERE MONTH(tgl) = '$bln'"); ?>
              <span class="count_top"><i class="fa fa-tags"></i> Total Penjualan </span>
              <?php while ($a = mysql_fetch_array($sql)) { ?>
              <div align="center" class="count red">RP. <?php echo number_format($a['total']) ?>,-</div>
            <?php } ?>
              <span class="count_bottom"><i class="blue"><i class="fa fa-sort-des"></i>Total penjualan bulan ini </i></span>
            </div>
          </div>
<?php $a = $_SESSION ['username']; 
      $b = mysql_query("SELECT * FROM db_user WHERE username = '$a' ");  
?>

           <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <?php while ($data = mysql_fetch_array($b)) { ?>
                    Selamat datang<strong> <?php echo $data['nama'] ?></strong> Anda login dengan hak-akses <b> <?php echo $data['akses'] ?> </b>
                    <?php } ?>
                  </div>


            <div class="clearfix"></div>

<div class="col-md-12 col-sm-1 col-xs-2">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Statistik Penjualan <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="container"></div>
                                </div>
                </div>
              </div>
            </div>

       <?php include 'page/footer.php'; ?>
