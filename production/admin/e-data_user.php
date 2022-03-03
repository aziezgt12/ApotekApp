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
                              $a = $_GET['username'];
                              $sqlq = mysql_query("SELECT * FROM db_user WHERE username='$a'");
                        ?>                     
                        <div class="modal-body">

                          <?php while ($data = mysql_fetch_array($sqlq)) { ?>

                          <form action="#" class="form-horizontal form-label-left" method="post" >

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Username<span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" readonly="" name="username" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['username'] ?>">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Nama Lengkap <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="nama" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['nama']?>">
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Password<span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="pass" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['password'] ?>">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Hak - Akses <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <select  name="akses" required="required" class="form-control col-md-7 col-xs-12" >
                                <<option><?php echo $data['akses'] ?></option>}
                                <<option>Adminstrator</option>}
                                <<option>Dokter</option>}
                                <<option>Apoteker</option>}
                                option
                            </select> 
                        </div>
                        </div>
                        </div>

                          <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="tempat_lahir" class="form-control col-md-3 col-xs-12" value="<?php echo $data['tempat_lahir'] ?>">
                        
                      </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="date" id="first-name" required="required" name="tgl_lahir" class="form-control col-md-3 col-xs-12" value="<?php echo $data['tgl_lahir'] ?>">
                        
                      </div>
                      </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Jenis Kelamin <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">

                            <select name="jk" required="required" class="form-control col-md-7 col-xs-12" ">
                                <option><?php echo $data['jk']?></option>}
                                <option>Laki - Laki</option>}
                                <option>Perempuan</option>}
                                
                            </select>
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Lokasi / Domisili <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="lokasi" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['domisili']?>">
                        </div>
                        </div>
  

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Telp <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="telp" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['telp']?>">
                        </div>
  

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Email <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="email" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['email']?>">
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Alamat <span class="required"></span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea cols="40" name="alamat" required="required" class="form-control col-md-7 col-xs-12"><?php echo $data['alamat']?></textarea>
                        </div>               
                      </div>                      
                    <?php } ?>



                        </div>
                        <div class="modal-footer">
                          <a href="data_user.php" class="btn btn-dark ">Batal</a>
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

$user          = $_POST['username'];
$nama          = $_POST['nama'];
$pass          = $_POST['pass'];
$akses          = $_POST['akses'];
$t_lahir          = $_POST['tempat_lahir'];
$tgl          = $_POST['tgl_lahir'];
$jk          = $_POST['jk'];
$lokasi          = $_POST['lokasi'];
$telp          = $_POST['telp'];
$email          = $_POST['email'];
$alamat          = $_POST['alamat'];


    $ssl1 = mysql_query("
        UPDATE `db_apotek`.`db_user`
        SET 
          `password` = '$pass',
          `nama` = '$nama',
          `akses` = '$akses',
          `tempat_lahir` = '$t_lahir',
          `tgl_lahir` = '$tgl',
          `jk` = '$jk',
          `domisili` = '$lokasi',
          `telp` = '$telp',
          `email` = '$email',
          `alamat` = '$alamat'
        WHERE `username` = '$user';      ");
echo "<script>document.location.href='data_user.php';</script>";

}


?>






