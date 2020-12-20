<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h4 style="text-align:left"><b>Form Tambah Santri Rumah Tahfidz </b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('siswa/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nomor Induk Santri</label>

                      <div class="col-sm-6">
                        <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode" autocomplete="off" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Santri</label>

                      <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" autocomplete="off" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>

                      <div class="col-sm-6" >
                        <?php
                          echo form_dropdown('jk', array( 'Laki-laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'), null, "class='form-control'" ) ;
                        ?>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>

                      <div class="col-sm-6">
                        <input type="file" name="userfile" autocomplete="off" required>
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
                        <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off" required >
                      </div>
                  </div>
				  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-6">
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" autocomplete="off" required >
                      </div>
                  </div>
				  
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Bergabung </label>

                     <div class="col-sm-6">
                        <input type="date" name="tgl_masuk" class="form-control" autocomplete="off" required >
                      </div>
                  </div>

 					<div class="form-group">
                      <label class="col-sm-2 control-label">Iuran Bulanan</label>

                      <div class="col-sm-6">
					  <input type="date"  name="iuran" class="form-control" placeholder="Masukkan Iuran" autocomplete="off" required >
                      </div>
                  </div>
				  
				  <div class="form-group">
						  <label class="col-sm-2 control-label">Jadwal Tasmik</label>

                      <div class="col-sm-6">
                        <input type="text" name="jadwal" class="form-control" placeholder="Masukkan Jadwal Tasmik" autocomplete="off" required >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Batas Hafalan</label>

                      <div class="col-sm-6">
                        <input type="text" name="hafalan" class="form-control" placeholder="Masukkan Batas Hafalan" autocomplete="off" required >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Prestasi Santri</label>

                      <div class="col-sm-6">
                        <input type="text" name="prestasi" class="form-control" placeholder="Masukkan Prestasi Santri" autocomplete="off" required >
                      </div>
                  </div>
				    <div class="form-group">
                      <label class="col-sm-2 control-label">Tabungan Santri</label>

                      <div class="col-sm-6">
                        <input type="text" name="tabungan" class="form-control" placeholder="Masukkan Tabungan Santri" autocomplete="off" required >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ayah</label>

                      <div class="col-sm-6">
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama ayah" autocomplete="off" required >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Ibu</label>

                      <div class="col-sm-6">
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="off" required >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan Ayah</label>

                      <div class="col-sm-6">
                        <?php
                          echo cmb_dinamis('pekerjaan', 'tbl_pekerjaan', 'nama_pekerjaan', 'kd_pekerjaan');
                        ?>
                      </div>
                  </div>
				  
				 <div class="form-group">
                      <label class="col-sm-2 control-label">Pekerjaan Ibu</label>

                      <div class="col-sm-6">
                        <?php
                          echo cmb_dinamis('pekerjaanibu', 'tbl_pekerjaanibu', 'nama_pekerjaanibu', 'kd_pekerjaanibu');
                        ?>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Nomor WA</label>

                      <div class="col-sm-6">
                        <input type="text" name="wa" class="form-control" placeholder="Masukkan WA" autocomplete="off" required >
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