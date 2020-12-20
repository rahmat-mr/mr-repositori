<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('siswa/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">KODE</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $siswa['kode']; ?>" readonly="true" name="kode" class="form-control" placeholder="Masukkan KODE">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $siswa['nama']; ?>" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>

                      <div class="col-sm-6">
                        <input type="file" name="userfile">
                        <img src="<?php echo base_url()."/uploads/".$siswa['foto']; ?>" width="150px">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>

                      <div class="col-sm-5">
                        <?php
                          echo form_dropdown('jk', array('Pilih Jenis Kelamin', 'Laki-laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'), $siswa['jk'], "class='form-control'");
                        ?>
                      </div>
                  </div>
				  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tempat Lahir</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['tempat_lahir']; ?>" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                      </div>
                  </div>
				  
					
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-6">
                        <input type="date" value="<?php echo $siswa['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control">
                      </div>
                  </div>
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['alamat']; ?>" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                      </div>
                  </div>
				  
				  
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Masuk</label>
                      <div class="col-sm-6">
                        <input type="date" value="<?php echo $siswa['tgl_masuk']; ?>" name="tgl_masuk" class="form-control">
                      </div>
                  </div>
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Iuran Bulanan</label>

                      <div class="col-sm-6">
                        <input type="date" value="<?php echo $siswa['iuran']; ?>" name="iuran" class="form-control" placeholder="Masukkan Iuran">
                      </div>
                  </div>

				   <div class="form-group">
						  <label class="col-sm-2 control-label">Jadwal Tasmik</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['jadwal']; ?>" name="jadwal" class="form-control" placeholder="Masukkan Jadwal Santri">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Batas Hafalan</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['hafalan']; ?>" name="hafalan" class="form-control" placeholder="Masukkan Hafalan Santri">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Prestasi Santri</label>

                      <div class="col-sm-6">
                         <input type="text" value="<?php echo $siswa['prestasi']; ?>" name="prestasi" class="form-control" placeholder="Masukkan Prestasi Santri">
                      </div>
                  </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tabungan Santri</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['tabungan']; ?>" name="tabungan" class="form-control" placeholder="Masukkan Tabungan Santri">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ayah</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['nama_ayah']; ?>" name="nama_ayah" class="form-control" placeholder="Masukkan Nama ayah">
                      </div>
                 </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ibu</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['nama_ibu']; ?>" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu">
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan Ayah</label>

                      <div class="col-sm-5">
                        <?php
						 echo cmb_dinamis('pekerjaan', 'tbl_pekerjaan', 'nama_pekerjaan', 'kd_pekerjaan', $siswa['kd_pekerjaan']);
                        ?>
                      </div>
                  </div>
				  
				 <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan Ibu</label>
                      <div class="col-sm-5">
                        <?php
                         echo cmb_dinamis('pekerjaanibu', 'tbl_pekerjaanibu', 'nama_pekerjaanibu', 'kd_pekerjaanibu', $siswa['kd_pekerjaanibu']);
                        ?>
                      </div>
                  </div>
				  <div class="form-group">
                      <label class="col-sm-2 control-label">WA Orang Tua</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $siswa['wa']; ?>" name="wa" class="form-control" placeholder="Masukkan WA">
                      </div>
                  </div>
                  

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('siswa', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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