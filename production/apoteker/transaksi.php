<?php include 'page/top.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  

                    <h2>Data Obat<small></small></h2>
                  <div class="x_content">
                    <a href="penjualan.php" class="btn btn-dark"><span class="glyphicon glyphicon-folder-open"> </span><b> Tambah Data</b></a></button><p>
                  <?php 
                  $query = mysql_query("select * from penjualan");
                  ?>
                    <table id="datatable-keytable" class="table basic-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pembeli</th>
                          <th>Hari / Tanggal </th>
                          <th>Total harga </th>
                          <th>Total Bayar</th>
                          <th>Kembali</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>

                      <tbody>
                      <?php 
                      $no=1;
                      while ( $data=mysql_fetch_array($query)) 
                        {
                          $tanggal = $data['tgl'];
                          $day = date('D', strtotime($tanggal));
                          $dayList = array(
                              'Sun' => 'Minggu',
                              'Mon' => 'Senin',
                              'Tue' => 'Selasa',
                              'Wed' => 'Rabu',
                              'Thu' => 'Kamis',
                              'Fri' => 'Jumat',
                              'Sat' => 'Sabtu'
                          );
                          ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['customer'] ?></td>
                          <td><?php echo $dayList[$day]?>, <?php echo tgl_indo($data['tgl']) ?> </td>
                          <td>Rp. <?php echo number_format($data['total_harga']) ?>,-</td>
                          <td>Rp. <?php echo number_format($data['total_bayar']) ?>,-</td>
                          <td>Rp. <?php echo number_format($data['kembali']) ?>,-</td>
                          <td>
        <a href="struk.php?kode=<?php echo $data['id'] ?>"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span></a>
                          </td>

                        </tr>
                       
                        <?php } ?>
                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                  </div>

<?php include 'page/footer.php'  ?>
