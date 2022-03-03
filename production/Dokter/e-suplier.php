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
                        <div class="modal-body">
                  <div class="x_content">

                        <?php 
                              $a = $_GET['kode'];
                              $sqlq = mysql_query("SELECT * FROM suplier WHERE kode='$a'");
                        ?>                     
                        <div class="modal-body">

                          <?php while ($data = mysql_fetch_array($sqlq)) { ?>

                          <form action="#" class="form-horizontal form-label-left" method="post" >



                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kode suplier <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode" required="required" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $data['kode']?>">
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Nama suplier <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="nama" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['nama']?>">
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Lokasi / Kota <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="lokasi" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['kota']?>">
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Telp <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="telp" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['telp']?>">
                        </div>
                        </div>
  

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Email <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="email" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['email']?>">
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Alamat <span class="required"></span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea cols="30" name="alamat" required="required" class="form-control col-md-7 col-xs-12"><?php echo $data['alamat']?></textarea>
                        </div>               
                      </div>                      

                    <?php } ?>


                        </div>
                        <div class="modal-footer">
                          <a href="suplier.php" class="btn btn-dark ">Batal</a>
                          <button type="submit" class="btn btn-primary" name="simpan">Update</button>
                        </div>
                      </form>


                  </div>
                </div>
                </p></div></div>
              </div>


        <!-- /page content -->

        <!-- footer content -->
<?php include 'page/footer.php';  

 if (isset($_POST['simpan'])) {


    $nama          = $_POST['nama'];
    $lokasi        = $_POST['lokasi'];
    $telp          = $_POST['telp'];
    $email         = $_POST['email'];
    $alamat        = $_POST['alamat'];


    $ssl1 = mysql_query("
      UPDATE `db_apotek`.`suplier`
      SET 
        `nama` = '$nama',
        `kota` = '$lokasi',
        `telp` = '$telp',
        `email` = '$email',
        `alamat` = '$alamat'
      WHERE `kode` = '$a';      
      ");
echo "<script>document.location.href='suplier.php';</script>";

}


?>





