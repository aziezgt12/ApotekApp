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
<strong><h3 align="center"><b>Statistik Penjualan  </h3></strong>
<h4 align="center"><?php echo tgl_indo($tanggalawal)  ?> - <?php echo tgl_indo($tanggalakhir) ?></b></h4>
  <?php } ?>
<br>
                   <table id="" class="table table-bordered">
                            <?php
                            if ((isset($_POST['pencarian']))) {
                              $sql=mysql_query("SELECT * FROM statis_lap WHERE tgl BETWEEN '$tgl_awal' AND '$tgl_akhir'");
                            ?>
                    <thead>
                        <tr bgcolor="#DCDCDC">
                          <th width="2%"> No </th>
                          <th width="9%"> Kode Obat </th>
                          <th width="50%"> Nama Obat </th>
                          <th width="12%">Jumlah Transaksi</th>
                          <th width="10%">Jumlah Terjual</th>
                          </tr>
                    </thead>
                      <?php
                        $no=1;
                      while ($data=mysql_fetch_array($sql)) 
                      { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>OB-00<?php echo $data['kode'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td align="center"><?php echo $data['total_terjual'] ?></td>
                        <td align="center"><?php echo $data['jumlah'] ?></td>
                      </tr>
                        <?php } ?>
      <a href="stat-print.php?awal=<?php echo $tgl_awal ?>&&akhir=<?php echo $tgl_akhir ?>"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"> </span> Cetak Laporan</a>
              <?php } ?>
</div>
                    </tbody>
                    </table>
</div>
</div>
</div>
</div>
</div>
</div></div></div>


<?php include 'page/footer.php'; ?>
