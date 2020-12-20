<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Form Tambah Pegawai </b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('karyawan/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Pegawai</label>

                      <div class="col-sm-6">
                        <input type="text" name="kodek" class="form-control" placeholder="Masukkan Kode" autocomplete="off" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Pegawai</label>

                      <div class="col-sm-6">
                        <input type="text" name="namak" class="form-control" placeholder="Masukkan Nama Lengkap" autocomplete="off" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>

                      <div class="col-sm-6">
                        <?php
                          echo form_dropdown('jk', array( 'Laki-laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'), null, "class='form-control'" );
                        ?>
                      </div>
                  </div>
             				  								  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat Lahir</label>

                      <div class="col-sm-6">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" autocomplete="off" required>
                      </div> </div>
					  
				<div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>	 

                      <div class="col-sm-6">
                        <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off" required>
                      </div>
                  </div>
				  
				    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-6">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" autocomplete="off" required>
                      </div>
                  </div>
				  
 					<div class="form-group">
                      <label class="col-sm-2 control-label">Jabatan</label>

                      <div class="col-sm-6">
                        <?php
                          echo cmb_dinamis('jabatan', 'tbl_jabatan', 'nama_jabatan', 'kd_jabatan');
                        ?>
                      </div>
                  </div>
				  
				  <div class="form-group">
						  <label class="col-sm-2 control-label">Pendidikan</label>

                      <div class="col-sm-6">
                        <input type="text" name="pendidikan" class="form-control" placeholder="Masukkan Pendidikan" autocomplete="off" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">No. HP</label>

                      <div class="col-sm-6">
                        <input type="text" name="hp" class="form-control" placeholder="Masukkan No. HP" autocomplete="off" required>
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label"> Tanggal Gajian Terakhir</label>

                      <div class="col-sm-6">
                        <input type="date" name="gaji" class="form-control" autocomplete="off" required>
                      </div>
                  </div>
				  
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>

                      <div class="col-sm-6">
                        <input type="file" name="userfile" autocomplete="off" required> 
                      </div>
                  </div>

                 

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('karyawan', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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