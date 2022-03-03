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

                        <?php 
                            $q = $_GET['kode'];
                            $query = mysql_query("SELECT * FROM tb_obat WHERE kode='$q'");
                        ?>    

                        <div class="modal-body">
                          <?php while ($data = mysql_fetch_array($query)) { ?>

                          <form action="#" class="form-horizontal form-label-left" method="post" >

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kode obat <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode" required="required" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $data['kode']; ?>">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Nama obat <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="nama" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['nama'] ?>">
                        </div>
                        </div>
                        </div>

                            <?php $sql = mysql_query("select * from suplier"); ?>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Suplier <span class="required"></span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="suplier" required="required" class="form-control col-md-7 col-xs-12">
                                      <option><?php echo $data['suplierid'] ?></option>
                                  <?php while ($data1 = mysql_fetch_array($sql)) { ?>
                                      <option><?php echo $data1['nama'] ?></option>
                                  <?php } ?>
                            </select>
                        </div>
                        </div>

                            <?php $sql2 = mysql_query("SELECT * FROM kategori"); ?>     
                         <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kategori <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <select name="kategori" required="required" class="form-control col-md-7 col-xs-12">
                                      <option><?php echo $data['kategori'] ?></option>
                                      <?php while ( $data2 = mysql_fetch_array($sql2)) { ?>
                                      <option><?php echo $data2['nama'] ?></option>
                                      <?php } ?>
                            </select>
                        </div>
                        
                         <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Satuan <span class="required"></span></label>
                            
                            <?php $sql3 = mysql_query("SELECT * FROM satuan"); ?>     
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <select name="satuan" required="required" class="form-control col-md-7 col-xs-12">
                                      <option><?php echo $data['satuan'] ?></option>
                                      <?php while ( $data3 = mysql_fetch_array($sql3)) { ?>
                                      <option><?php echo $data3['nama'] ?></option>
                                      <?php } ?>
                            </select>
                        </div>
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Harga beli <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="beli" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['beli'] ?>">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Harga jual <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="jual" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['jual'] ?>">
                        </div>
                      </div>
                      </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Expired <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="date" id="first-name" name="expired" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['expired'] ?>">
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Stok <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="stok" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['stok'] ?>">
                        </div>
                      </div>                      
                      </div>                      



                        </div>
                        <div class="modal-footer">
                          <a href="data_obat.php" class="btn btn-default" data-dismiss="modal">Batal</a>
                          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </div>
                      </form>
                    <?php } ?>
                  </div>
                </p></div></div>
              </div>


        <!-- /page content -->

        <!-- footer content -->
<?php include 'page/footer.php';  

 if (isset($_POST['simpan'])) {

    $kode         = $_POST['kode'];
    $nama         = $_POST['nama'];
    $suplier      = $_POST['suplier'];
    $kategori     = $_POST['kategori'];
    $satuan       = $_POST['satuan'];
    $beli         = $_POST['beli'];
    $jual         = $_POST['jual'];
    $expire       = $_POST['expired'];
    $stok         = $_POST['stok'];


    $ssl1 = mysql_query("
      UPDATE `db_apotek`.`tb_obat`
      SET 
        `nama` = '$nama',
        `suplierid` = '$suplier',
        `kategori` = '$kategori',
        `satuan` = '$satuan',
        `beli` = '$beli',
        `jual` = '$jual',
        `expired` = '$expire',
        `stok` = '$stok'
      WHERE `kode` = '$kode';

      ");
echo "<script>document.location.href='data_obat.php';</script>";

}


?>





