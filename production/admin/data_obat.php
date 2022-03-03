<?php include 'page/top.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>
                  </div>
            </div>

      
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Obat<small></small></h2>
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

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-dark"><span class="glyphicon glyphicon-folder-open" data-toggle="modal" data-target=".bs-example-modal-lg"> </span><b> Tambah Data</b></button><p>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Form data obat</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form action="obatadd_act.php" class="form-horizontal form-label-left" method="post" >

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kode obat <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode" required="required" class="form-control col-md-7 col-xs-12" readonly value="">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Nama obat <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="nama" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
                        </div>
                        </div>

                            <?php $sql = mysql_query("select * from suplier"); ?>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Suplier <span class="required"></span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="suplier" required="required" class="form-control col-md-7 col-xs-12">
                                      <<option>Pilih Suplier</option>}
                                      option
                                  <?php while ($data = mysql_fetch_array($sql)) { ?>
                                      <option><?php echo $data['nama'] ?></option>
                                  <?php } ?>
                            </select>
                        </div>
                        </div>

                            <?php $sql2 = mysql_query("SELECT * FROM kategori"); ?>     
                         <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kategori <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <select name="kategori" required="required" class="form-control col-md-7 col-xs-12">
                                      <option>Pilih Kategori</option>
                                      <?php while ( $date = mysql_fetch_array($sql2)) { ?>
                                      <option><?php echo $date['nama'] ?></option>
                                      <?php } ?>
                            </select>
                        </div>
                        
                         <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Satuan <span class="required"></span></label>
                            
                            <?php $sql3 = mysql_query("SELECT * FROM satuan"); ?>     
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <select name="satuan" required="required" class="form-control col-md-7 col-xs-12">
                                      <?php while ( $date = mysql_fetch_array($sql3)) { ?>
                                      <option><?php echo $date['nama'] ?></option>
                                      <?php } ?>
                            </select>
                        </div>
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Harga beli <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="beli" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Harga jual <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="jual" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
                      </div>
                      </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Expired <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="date" id="first-name" name="expired" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Stok <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="stok" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
                      </div>                      
                      </div>                      



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>

                  <?php 
                  $query = mysql_query("select * from tb_obat");
                  ?>

                    <table id="datatable-keytable" class="table basic-table">
                      <thead>
                        <tr>
                          <th width="10%">Kode</th>
                          <th>Nama obat</th>
                          <th>Suplier</th>
                          <th>Kategori</th>
                          <th>Satuan</th>
                          <th>Hpp</th>
                          <th>Net</th>
                          <th>Expired</th>
                          <th>Stok</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>

                    
                      <tbody>
                      <?php 
                      while ( $data=mysql_fetch_array($query)) 
                        {?>
                        <tr>
                          <td>OB-00<?php echo $data['kode'] ?></td>
                          <td><?php echo $data['nama'] ?></td>
                          <td><?php echo $data['suplierid'] ?></td>
                          <td><?php echo $data['kategori'] ?></td>
                          <td><?php echo $data['satuan'] ?></td>
                          <td>Rp. <?php echo number_format($data['beli']) ?>,-</td>
                          <td>Rp. <?php echo number_format($data['jual']) ?>,-</td>
                          <td><?php echo tgl_indo($data['expired']) ?></td>
                          <td><?php echo $data['stok'] ?></td>
                          <td>
        <a href="e-data_obat.php?kode=<?php echo $data['kode'] ?>"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
        <a name="hapus" onClick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='data_obat.php?kode=<?php echo $data['kode']; ?>' }" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash"  ></span></a>
        
                          </td>

                        <?php } ?>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
              </div>  
            </p></div></div>


        <!-- /page content -->

        <!-- footer content -->
<?php include 'page/footer.php'  ?>

<?php if (isset($_GET['kode'])) { 
    $s = $_GET['kode'];
    $sql = mysql_query("
DELETE
FROM `db_apotek`.`tb_obat`
WHERE `kode` = '$s';
      ");
echo "<script>document.location.href='data_obat.php';</script>";
    
}
  ?>



