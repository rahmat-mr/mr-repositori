<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('karyawan/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Karyawan</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['kodek']; ?>" readonly="true" name="kodek" class="form-control" placeholder="Masukkan Kode Karyawan">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">NamaKaryawan</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['namak']; ?>" name="namak" class="form-control" placeholder="Masukkan Nama Lengkap">
                      </div>
                  </div>

					<div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['alamat']; ?>" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                      </div>
                  </div>
				  
                  

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>

                      <div class="col-sm-6">
                        <?php
                          echo form_dropdown('jk', array('Pilih Jenis Kelamin', 'Laki-laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'), $karyawan['jk'], "class='form-control'");
                        ?>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Tempat Lahir</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['tempat_lahir']; ?>" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                      </div>
                  </div>
				  
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-6">
                        <input type="date" value="<?php echo $karyawan['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control">
                      </div>
                  </div>

				   <div class="form-group">
                      <label class="col-sm-2 control-label">Jabatan</label>

                      <div class="col-sm-6">
                       <?php
						  echo cmb_dinamis('jabatan', 'tbl_jabatan', 'nama_jabatan', 'kd_jabatan', $karyawan['kd_jabatan']);
                        ?>
                      </div>
                  </div>
				  
				   <div class="form-group">
						  <label class="col-sm-2 control-label">Pendidikan</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['pendidikan']; ?>" name="pendidikan" class="form-control" placeholder="Masukkan Pendidikan">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">No. HP</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $karyawan['hp']; ?>" name="hp" class="form-control" placeholder="Masukkan No. HP">
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>

                      <div class="col-sm-6">
                        <input type="file" name="userfile">
                        <img src="<?php echo base_url()."/uploads/".$karyawan['foto']; ?>" width="150px">
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