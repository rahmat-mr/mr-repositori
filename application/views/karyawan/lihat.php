

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
		
        <div class="col-md-7">
            <div class="box">
                <div class="box-header with-border">
                    <h4 style="text-align:left" ><b>BIODATA PEGAWAI </h3></b>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
				
                    <table class="table"> 
					<tr>
                             
                            <td><img src="<?php echo base_url()."/uploads/".$karyawan['foto']; ?>" width="125" height="134"></td>
                      </tr>
                        <tr>
                            <td>Nomor Induk Santri</td>
                            <td>:</td>
                            <td><?php echo $karyawan['kodek']; ?></td>
                        </tr>
						 <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><?php echo $karyawan['namak']; ?></td>
                        </tr>
						 <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $karyawan['jk']; ?></td>
                        </tr>
						
						 <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?php echo $karyawan['tempat_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo tgl_indonesia($karyawan['tanggal_lahir']) ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php $kode   = $this->uri->segment(3);
                    		$query = "SELECT tbl_jabatan.nama_jabatan
                            			FROM  tbl_karyawan  , tbl_jabatan  
                           				 WHERE tbl_karyawan.kd_jabatan = tbl_jabatan.kd_jabatan AND tbl_karyawan.kodek = '$kode'";
                   			 $nama = $this->db->query($query)->row_array();
               			
							  echo $nama['nama_jabatan']; ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $karyawan['pendidikan'] ?></td>
                        </tr>	
						
						<tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $karyawan['alamat'] ?></td>
                        </tr>						
						
						<tr>
                            <td>No. Hp</td>
                            <td>:</td>
                            <td>+<?php echo $karyawan['hp']; ?></td>
                        </tr>
						
						<tr>
                            <td>Kirim WA</td>
                            <td>:</td>
                         	<td>  <a class=”btn btn-warning”  href="https://api.whatsapp.com/send?phone=<?php echo $karyawan['hp']; ?>&text=Assalamu'alaikum,%0APembayaran%20Iuran%20Bulanan%20Belum%20Dilakukan"class=”btn btn-warning”><b style="color:#009900"><i class="btn btn-success "><span class="fa fa-whatsapp"></i></a></td>
							
							
                        </tr>
                    </table>
                    <div class="box-footer">
                        <?php
                         echo anchor('karyawan', 'KEMBALI', array('class'=>'btn btn-danger btn-flat'));
                        ?>
                    </div>
					<div class="box-footer">
                        
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->