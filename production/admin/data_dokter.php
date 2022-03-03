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
                    <h2>Data Dokter<small></small></h2>
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

                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-dark"><span class="glyphicon glyphicon-folder-open" data-toggle="modal" data-target=".bs-example-modal-lg"> </span><b> Tambah Dokter</b></button><p>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Form data Dokter</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form action="tmb_brg_act.php" class="form-horizontal form-label-left" method="post" >

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Kode Dokter <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode_barang" required="required" class="form-control col-md-7 col-xs-12" readonly value="Tidak perlu diisi">
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Nama Dokter <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode_barang" required="required" class="form-control col-md-7 col-xs-12" readonly value="Tidak perlu diisi">
                        </div>
                        </div>
                        </div>
                          <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="tempat_lahir" class="form-control col-md-3 col-xs-12">
                        
                      </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name"> Tanggal Lahir <span class="required">*</span>
                        </label>
                      <div class="col-md-2 col-sm-9 col-xs-12">
                          <select name="tanggal" class="form-control">
                            <option>Tanggal</option>
                      <?php 

                          for ($i=1; $i <=31 ; $i++) 
                          { 
                            echo"<option>$i</option>";
                          }

                      ?>
                          </select>
                      </div>
                      
                      <div class="col-md-2 col-sm-9 col-xs-12">
                          <select  name="bulan" class="form-control">
                            <option value="">Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                      </div>
                      <div class="col-md-2 col-sm-9 col-xs-12">
                          <select name="tahun" class="form-control">
                            <option>Tahun</option>


                          <?php 

                          for ($a=1970; $a <=2099 ; $a++) 
                          { 
                            echo"<option>$a</option>";
                          }

                      ?>
                          </select>
                      </div>    
                      </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Jenis Kelamin <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">

                            <select name="kode_barang" required="required" class="form-control col-md-7 col-xs-12" ">
                                <option>Laki - Laki</option>}
                                <option>Perempuan</option>}
                                
                            </select>
                        </div>
                        </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Lokasi / Domisili <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode_barang" required="required" class="form-control col-md-7 col-xs-12" readonly value="Tidak perlu diisi">
                        </div>
                        </div>
  

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Telp <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="kode_barang" required="required" class="form-control col-md-7 col-xs-12" readonly value="Tidak perlu diisi">
                        </div>
  

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Email <span class="required"></span></label>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <input type="date" id="first-name" name="kode_barang" required="required" class="form-control col-md-7 col-xs-12" readonly value="Tidak perlu diisi">
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"> Alamat <span class="required"></span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea cols="40 name="kode_barang" required="required" class="form-control col-md-7 col-xs-12">Silahkan isi komentar anda</textarea>
                        </div>               
                      </div>                      



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>

                    <table id="datatable-keytable" class="table basic-table">
                      <thead>
                        <tr>
                          <th width="10%">Kode</th>
                          <th>Nama</th>
                          <th>Domisili</th>
                          <th>T / tl</th>
                          <th>Telp</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>SP-00001</td>
                          <td>PT. KONIMEX</td>
                          <td>Pekanbaru</td>
                          <td>Jln. Soekarno hatta</td>
                          <td>02183109</td>
                          <td>Admin@konimex.com</td>
                          <td>
        <a href="edit_brg.php?kode_barang=<?php echo $data['kode_barang'] ?>"  class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
        <a onClick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_barang.php?kode_barang=<?php echo $data['kode_barang']; ?>' }" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash"  ></span></a>
                          </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>  
            </p></div></div>


        <!-- /page content -->

        <!-- footer content -->
<?php include 'page/footer.php' ?>
