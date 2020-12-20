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
                echo form_open_multipart('siswa/bayariuran', 'role="form" class="form-horizontal"');
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
                      <label class="col-sm-2 control-label">Iuran Bulanan (Lunas) </label>
                      <div class="col-sm-9">
                         <input type="text" value="<?php echo tanpa_tgl_indonesia($siswa['iuran']) ?>" readonly="true" name="iuran" class="form-control" placeholder="Masukkan Iuran">
                      </div>
                  </div>
				  
	 			  <div class="form-group">
                      <label class="col-sm-2 control-label">Bayar Hingga</label>

                      <div class="col-sm-4">
                        <input type="date"  name="iuran" class="form-control" placeholder="Masukkan Iuran" autocomplete="off" required>
                      </div>
                  </div>
				   <div class="form-group">
                      <label class="col-sm-2 control-label"><span class="btn btn-success">Jumlah Rp.</label>

                      <div class="col-sm-4">
                        <input type="text"  name="jumlah_iuran" class="form-control" placeholder="Rp." autocomplete="off" required>
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
                          echo anchor('siswa/keuangan', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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