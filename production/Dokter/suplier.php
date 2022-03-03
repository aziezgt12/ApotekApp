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
                    <h2>Data Suplier<small></small></h2>
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

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-dark"><span class="glyphicon glyphicon-folder-open" data-toggle="modal" data-target=".bs-example-modal-lg"> </span><b> Tambah suplier</b></button><p>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Form data suplier</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form action="addsup.php" class="form-horizontal form-label-left" method="post" >

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kode suplier <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode" required="required" class="form-control col-md-7 col-xs-12" readonly value="">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Nama suplier <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="nama" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Lokasi / Kota <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="lokasi" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Telp <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="telp" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
  

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Email <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="email" required="required" class="form-control col-md-7 col-xs-12"  value="">
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Alamat <span class="required"></span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea cols="40" name="alamat" required="required" class="form-control col-md-7 col-xs-12"></textarea>
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
                  <?php $sql = mysql_query("SELECT * FROM suplier")?>
                    <table id="datatable-keytable" class="table basic-table">
                      <thead>
                        <tr>
                          <th width="10%">Kode</th>
                          <th>Nama</th>
                          <th>Kota</th>
                          <th>Alamat</th>
                          <th>Telp</th>
                          <th>Email</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>



                      <tbody>
                        <?php while ($data = mysql_fetch_array($sql)) { ?>
                        <tr>
                          <td>SP-0000<?php echo $data['kode'] ?></td>
                          <td><?php echo $data['nama'] ?></td>
                          <td><?php echo $data['kota'] ?></td>
                          <td><?php echo $data['alamat'] ?></td>
                          <td><?php echo $data['telp'] ?></td>
                          <td><?php echo $data['email'] ?></td>
                          <td>
        <a href="e-suplier.php?kode=<?php echo $data['kode'] ?>"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
        <a onClick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='suplier.php?kode=<?php echo $data['kode']; ?>' }" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash"  ></span></a>
                          </td>
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </p></div></div>


        <!-- /page content -->

        <!-- footer content -->
<?php include 'page/footer.php' ?>

<?php if (isset($_GET['kode'])) { 
    $s = $_GET['kode'];
    $sql = mysql_query("DELETE FROM suplier WHERE kode='$s'");

echo "<script>document.location.href='suplier.php';</script>";
    
}
  ?>



