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
                              $sql=mysql_query("SELECT * FROM TB_OBAT");
                            ?>
                    <thead>
                        <tr bgcolor="#DCDCDC">
                          <th width="2%"> No </th>
                          <th width="9%"> Kode Obat </th>
                          <th width="40%"> Nama Obat </th>
                          <th width="12%">Kategori</th>
                          <th width="10%">Satuan</th>
                          <th width="10%">Stok</th>
                          <th width="20%">Status</th>
                          </tr>
                    </thead>
                      <?php
                        $no=1;
                      while ($data=mysql_fetch_array($sql)) 
                      { $p = $data['stok'] ;

                      if ($p<=10) {
                          $nilai = 'Minimum';
                      }else
                          $nilai = 'Normal';
                        ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>OB-00<?php echo $data['kode'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['kategori'] ?></td>
                        <td><?php echo $data['satuan'] ?></td>
                        <td align="center"><?php echo $data['stok'] ?></td>
                        <td><?php echo $nilai ?></td>
                        
                      </tr>
                        <?php } ?>

<a href="stok-print.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"> </span> Cetak Laporan</a>

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
