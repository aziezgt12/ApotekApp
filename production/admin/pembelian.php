<?php include 'page/top.php'; ?>
        <div class="right_col" role="main">
 
        <div class="">
            <div class="page-title">
              <div class="title_left">
              <h3><span class="glyphicon glyphicon-object-align-left"></span>  Form Tambah Pembelian </h3>
              </div>

              <div class="title_right">
                </div>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Data Pembelian</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                              </li>
                      <li><a class=""><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					
					
          <div id="section">
             <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Produk <small></small></h2>
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
                    <br />
          
          <form  name="f" action="proses_temp_beli.php" method="post" class="form-horizontal form-label-left">
          <div class="form-group">
              <label hidden class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name"> No Transaksi <span class="required"></span></label>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="hidden" id="first-name" name="no_transaksi" hidden  required="required" class="form-control col-md-7 col-xs-12">
          </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name"> Pilih Produk <span class="required"></span></label>
             
          <div class="col-md-9 col-sm-6 col-xs-12">
          
          <select class="select2_single form-control" tabindex="-1" name="kode_Obat">
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
          </select>

          </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name"> Pilih Suplier <span class="required"></span></label>
             
          <div class="col-md-9 col-sm-6 col-xs-12">
          
          <select class="select2_single form-control" tabindex="-1" name="kode_Obat">
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
                <option>Pilih Produk</option>
          </select>

          </div>
          </div>
          
         <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name"> Qty <span class="required"></span></label>
          <div class="col-md-3 col-sm-1 col-xs-3">
                <input type="number" id="first-name" min="0" value="0" name="qty"  required="required" class="form-control col-md-7 col-xs-12"  value="" placeholder="Jumlah">
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name"> Diskon <span class="required"></span></label>

          <div class="col-md-3 col-sm-2 col-xs-12">
                    <input type="number" id="first-name" min="0" value="0" name="diskon"  required="required" class="form-control col-md-7 col-xs-9"  value="" placeholder="Diskon">
          </div>
          </div>
          <div class="ln_solid"></div>
          <div class="col-md-9 col-md-offset-3">
          <input type="submit"  value="Tambah" name="simpan" class="btn btn-danger"> 
          </div>

          </form>
          </div>
      	  </div>
      	  </div>
      	  </div>
      	  </div>

              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Invoice <small></small></h2>
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
                    <br />
                    <form action="selesai_beli.php" method="post" class="form-horizontal form-label-left">
                     <p>
                     <div class="form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name"> No Faktur <span class="required"></span></label>
                    <div class="col-md-4 col-sm-6 col-xs-12">
            <input type="text" id="first-name" name="no_faktur"  required="required" class="form-control col-md-7 col-xs-12"  value=""  placeholder="No Faktur Suplier">
                    </div></div>
                    <div class="form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name"> Tanggal Pembelian <span class="required"></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" id="first-name" name="tgl"  required="required" class="form-control col-md-7 col-xs-12"  value="0">
                    </div></div>
<!--
          <div class="form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name"> Tanggal Order <span class="required"></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" name="tgl_order"  required="required"  class="form-control col-md-7 col-xs-12" >
                    </div></div>
-->

                  <div class="form-group">
          <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name"> Total Bayar <span class="required"></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="first-name" name="ongkir"  required="required" class="form-control col-md-7 col-xs-12"  value="0">
            <br />
                    </div></div>

          <div class="ln_solid"></div>
          <div class="form-group">
          <div class="col-md-9 col-md-offset-4">
                <input type='submit' class="btn btn-primary " value="Bayar Sekarang" name="Simpan"/>
                <input type='submit' class="btn btn-danger " value="Bayar Nanti" name="Simpan"/>
          </div>

                  </div>
                </div>
              </div></div>

          <div class="clearfix"></div>
          </div>
          <div class="x_content">
          
                <table class="table table-responsive">
                  <thead>

                      <tr>
                          <th>#</th>
                          <th>Kode Obat</th>
                          <th>Nama Obat</th>
                          <th>Harga Beli</th>
                          <th>Diskon</th>
                          <th>Qty</th>
                          <th>Sub Total</th>

                          <th>Action</th>

                      </tr>
                  </thead>
                      <tbody>
                      <tr>
                            <td>1</td>
                            <td>asda</td>
                            <td>asda</td>
                            <td>asda</td>
                            <td>asda</td>
                            <td>asda</td>
                            <td>asda</td>
                            <td>
     
        <a onClick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='' }" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"  ></span></a>
                            </td>
                            
            </tr>
            <tr>
                <td colspan="7" align="center"><b> Total </b></td>
                <td></td>                  
            </tr>
            <tr>
            <td colspan=9>
            <div class="control-label col-md-12 col-sm-3 col-xs-12"">
            </td>
            </tr>            
                        </tr>
                      </tbody>
                    </table>

        </form>
    
</td></tr></div></div></div></div></div></div></div>
<?php include 'page/footer.php'; ?>