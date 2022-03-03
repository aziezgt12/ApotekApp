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

<strong><h3 align="center"><b> Laporan Stok Obat</h3></strong>


<br>
                   <table id="" class="table table-bordered">
                            <?php
                              $sql=mysql_query("SELECT * FROM tb_obat");
                            ?>
                    <thead>
                        <tr width="100%" bgcolor="#DCDCDC" >
                          <th width="2%"> No </th>
                          <th width="10%"> Kode Obat </th>
                          <th width="30%"> Nama Obat </th>
                          <th width="28%"> Suplier </th>
                          <th width="20%">Tanggal Expired</th>
                          <th width="30%">Status</th>
                          </tr>
                    </thead>
                      <?php
                      $date = date("Y-m-d");

                        $no=1;
                      while ($data=mysql_fetch_array($sql)) 
                      { $p = $data['expired'] ;

                      if ( $date == $p || $date > $p ) {
                          $nilai = 'Obat Expired';
                      }else
                          $nilai = 'Obat Berlaku';
                        ?>
                      <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td>OB-00<?php echo $data['kode'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['suplierid'] ?></td>
                        <td><?php echo tgl_indo($data['expired']) ?></td>
                        <td><?php echo $nilai ?></td>                      
                      </tr>
                        <?php } ?>
      <a href="ex-print.php"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"> </span> Cetak Laporan</a>

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
