<?php
    include 'page/top.php';

?>


        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
   
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <li><a class=""><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
        <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">

<h2><b>Filter Sesuai Priode : </b></h2>
<p>
<p>
<p>

                    <form action="#" class="form-horizontal form-label-left" method="post" >

          <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Tanggal Mulai <span class="required" ></span></label>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class='input-group date' id="datetimerangepicker1" >
                                <input type='text' name="awal" required="" class="form-control"  data-date-format="YYYY/MM/DD" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        </div>


          <div class="form-group">
          <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Tanggal Selesai <span class="required"></span></label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class='input-group date' id="datetimerangepicker2" >
                                <input type='text' name="akhir" required=""  class="form-control"  data-date-format="YYYY/MM/DD" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        </div>
                        <br>
          <div class="col-md-2 col-md-offset-2">
          <input type="submit"  value="Filter" name="pencarian" class="btn btn-danger">
          </div>
          <br>
          <br>

<div class="ln_solid"></div>
          <?php
          if (isset($_POST['pencarian']))
          {

          $tgl_awal   = $_POST['awal'];
          $tgl_akhir  = $_POST['akhir'];

          $tanggalawal = date('Y-m-d', strtotime($tgl_awal));
          $tanggalakhir = date('Y-m-d', strtotime($tgl_akhir));

?>
<br>
<br>
<strong><h3 align="center"><b>Data Penjualan  </h3></strong>
<h4 align="center"><?php echo tgl_indo($tanggalawal)  ?> - <?php echo tgl_indo($tanggalakhir) ?></b></h4>
  <?php } ?>
<br>

    <table id="" class="table table-keytable">


    <thead>
      <tr>
        
      </tr>
    </thead>
      <?php
      if ((isset($_POST['pencarian']))) {
       $sql = mysql_query("select * from penjualan where tgl between '$tgl_awal' and '$tgl_akhir'") ?>
    <tbody>
      <?php $no=1; while ($data = mysql_fetch_array($sql)) { 
        $a = $data['id'];
      ?>

      <tr>
        <td rowspan="4" colspan="4"><h1>NO : <?php echo $no++; ?></h1></td>
      </tr>
      <tr bgcolor="#DCDCDC">
        <td colspan="1">No Faktur</td>
        <td>: <?php echo $data['id'] ?></td>

      </tr>
      <tr bgcolor="#DCDCDC">
        <td colspan="1">Pembeli</td>
        <td>: <?php echo $data['customer'] ?></td>

      </tr>
      <tr bgcolor="#DCDCDC">
        <td  colspan="1">Tgl</td>
        <td>: <?php echo tgl_indo($data['tgl']) ?></td>
<?php $ab = mysql_query("select * from detail, tb_obat where tb_obat.kode = detail.kode_obat and id='$a'") ?>

      </tr>
      <tr bgcolor="#2F4F4F">
        <td width="10%">Kode</td>
        <td width="40%">Nama Obat</td>
        <td width="15%">Harga</td>
        <td width="10%">Qty</td>
        <td width="10%">Diskon</td>
        <td width="20%">Subtotal</td>
      </tr>
      <?php while ($dt = mysql_fetch_array($ab)) { ?>
      <tr>
        <td>OB-00<?php echo $dt['kode_obat'] ?></td>
        <td><?php echo $dt['nama'] ?></td>
        <td>Rp. <?php echo  number_format($dt['harga']) ?>,00,-</td>
        <td><?php echo $dt['qty'] ?></td>
        <td><?php echo $dt['diskon'] ?> % </td>
        <td>Rp. <?php echo number_format($dt['subtotal']) ?>,00,-</td>
      </tr>
    <?php } ?>
    <?php 
      $ac = mysql_query("SELECT * FROM penjualan WHERE id='$a'")    ?>

      <tr bgcolor="#DCDCDC">
        <td colspan="4" rowspan="2"></td>
        <td>Total Harga</td>
        <?php while ($dr = mysql_fetch_array($ac)) { ?>
        <td>: Rp. <?php echo number_format($dr['total_harga']) ?>,00,-</td>
      <?php } ?>
      </tr>
      <?php $ad = mysql_query("select count(id) as totcont from detail where id='$a' ")?>
      <tr bgcolor="#DCDCDC">
        <td>Total Item</td>
        <?php while ($dy = mysql_fetch_array($ad)) { ?>
        <td>: <?php echo $dy['totcont'] ?> Item</td>
      <?php } ?>
      </tr>

      <tr>
        <td height="40px" colspan="6" ></td>
      </tr>
      <tr>
      <?php } ?>
            <?php $my = mysql_query("select sum(total_harga) as total from penjualan where tgl between '$tgl_awal' and '$tgl_akhir' "); ?>
      <tr>
      <?php while ($a = mysql_fetch_array($my)) { ?>
      <td colspan="6" align="right"><h4><b>Total Penjualan Bulan Ini : Rp. <?php echo number_format($a['total']) ?>,00,-</b></h4></td>
      <?php } ?>
      </tr>      


            <a href="l-jual-print.php?awal=<?php echo $tgl_awal ?>&&akhir=<?php echo $tgl_akhir ?>"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"> </span> Cetak Laporan</a>

    </tbody>
<?php } ?>
  </table>
    
</div>
</div>
</div>
</div>
</div>
</div></div></div>

<?php include 'page/footer.php'; ?>
