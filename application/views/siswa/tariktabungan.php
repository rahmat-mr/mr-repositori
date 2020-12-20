<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tabungan Santri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('siswa/TARIKtabungan', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nomor Induk Santri</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $siswa['kode']; ?>" readonly="true" name="kode" class="form-control" placeholder="Masukkan KODE">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Santri</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $siswa['nama']; ?>" readonly="true"  name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                      </div>
                  </div>
				  
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Tabungan Santri</label>

                      <div class="col-sm-9">
                        <b><input type="text" value="<?php echo $siswa['tabungan'] ?>" readonly="true" name="tabungan" class="form-control" placeholder="Masukkan Iuran">
                      </div>
                  </div>
				  
	 			  <div class="form-group">
                      <label class="col-sm-2 control-label"><span class="btn btn-success">Tarik Tabungan</label>

                      <div class="col-sm-4">
                        <input type="text" name="tabungan3" class="form-control" placeholder="Masukkan Tabungan" autocomplete="off" required>
                      </div>
                  </div>

				   <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>" />
				 
                  

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">TARIK</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('siswa/tabungan', 'Kembali', array('class'=>'btn btn-danger btn-flat '));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>