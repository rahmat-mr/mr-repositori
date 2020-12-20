<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Bayar Iuran Santri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('karyawan/bayargaji', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nomor Induk Karyawan</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['kodek']; ?>" readonly="true" name="kodek" class="form-control" placeholder="Masukkan KODE">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama karyawan</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['namak']; ?>" readonly="true"  name="namak" class="form-control" placeholder="Masukkan Nama Lengkap">
                      </div>
                  </div>
				  
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Gaji (Lunas) </label>
                      <div class="col-sm-6">
                         <input type="text" value="<?php echo tanpa_tgl_indonesia($karyawan['gaji']) ?>" readonly="true" name="gaji" class="form-control" placeholder="Masukkan Gaji">
                      </div>
                  </div>
				  
	 			  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Bayar</label>

                      <div class="col-sm-6">
                        <input type="date" value="<?php echo $karyawan['gaji']; ?>" name="gaji" class="form-control" placeholder="Masukkan Iuran">
                      </div>
                  </div>
				   <div class="form-group">
                      <label class="col-sm-2 control-label"><span class="btn btn-success">Jumlah Rp.</label>

                      <div class="col-sm-6">
                        <input type="text"  name="jumlah_gaji" class="form-control" placeholder="Rp." autocomplete="off" required>
                      </div>
                  </div>

				  <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>" />
				 
                  

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-success btn-flat">BAYAR</button>
                      </div>

                      <div class="col-sm- ">
                        <?php
                          echo anchor('karyawan/gaji', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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