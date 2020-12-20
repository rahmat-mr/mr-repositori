

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
		
        <div class="col-md-7">
            <div class="box">
                <div class="box-header with-border">
                    <h4 style="text-align:left" ><b>BIODATA SANTRI </h3></b>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
				
                    <table class="table"> 
					<tr>
                             
                            <td><img src="<?php echo base_url()."/uploads/".$siswa['foto']; ?>" width="125" height="153"></td>
                        </tr>
                        <tr>
                            <td>Nomor Induk Santri</td>
                            <td>:</td>
                            <td><?php echo $siswa['kode']; ?></td>
                        </tr>
						 <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><?php echo $siswa['nama']; ?></td>
                        </tr>
						 <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $siswa['jk']; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?php echo $siswa['tempat_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo tgl_indonesia($siswa['tanggal_lahir']) ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $siswa['alamat']; ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td>
                            <td>:</td>
                            <td><?php echo tgl_indonesia($siswa['tgl_masuk']) ?></td>
                        </tr>
						<tr>
                            <td>Iuran Bulanan Hingga</td>
                            <td>:</td>
                            <td><?php echo tanpa_tgl_indonesia($siswa['iuran']) ?></td>
                        </tr>
						<tr>
                            <td>Jadwal Tasmik</td>
                            <td>:</td>
                            <td><?php echo $siswa['jadwal']; ?></td>
                        </tr>
						<tr>
                            <td>Batas Hafalan</td>
                            <td>:</td>
                            <td><?php echo $siswa['hafalan']; ?></td>
                        </tr>
						<tr>
                            <td>Prestasi Santri</td>
                            <td>:</td>
                            <td><?php echo $siswa['prestasi']; ?></td>
                        </tr>
						<tr>
                            <td>Tabungan Santri</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($siswa['tabungan'],0,',','.')   ?></td>
                        </tr>
						<tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td><?php echo $siswa['nama_ayah']; ?></td>
                        </tr>
						<tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td><?php echo $siswa['nama_ibu']; ?></td>
                        </tr>
						<tr>
                            <td>Pekerjaan Ayah</td>
                            <td>:</td>
                            <td>
							 <?php
                    		$kode   = $this->uri->segment(3);
                    		$query = "SELECT tbl_pekerjaan.nama_pekerjaan
                            			FROM  tbl_siswa  , tbl_pekerjaan  
                           				 WHERE tbl_siswa.kd_pekerjaan = tbl_pekerjaan.kd_pekerjaan AND tbl_siswa.kode = '$kode'";
                   			 $nama = $this->db->query($query)->row_array();
               			
							  echo $nama['nama_pekerjaan']; ?>
							</td>
                        </tr>
						<tr>
                            <td>Pekerjaan Ibu</td>
                            <td>:</td>
                            <td> <?php
                    		$kode   = $this->uri->segment(3);
                    		$query = "SELECT tbl_pekerjaanibu.nama_pekerjaanibu
                            			FROM  tbl_siswa  , tbl_pekerjaanibu  
                           				 WHERE tbl_siswa.kd_pekerjaanibu = tbl_pekerjaanibu.kd_pekerjaanibu AND tbl_siswa.kode = '$kode'";
                   			 $nama = $this->db->query($query)->row_array();
               			
							  echo $nama['nama_pekerjaanibu']; ?>
							  </td>
                        </tr>
						<tr>
                            <td>No. Hp Orang Tua</td>
                            <td>:</td>
                            <td>+<?php echo $siswa['wa']; ?></td>
                        </tr>
						
						<tr>
                            <td>Kirim WA</td>
                            <td>:</td>
                         	<td>  <a class=”btn btn-warning”  href="https://api.whatsapp.com/send?phone=<?php echo $siswa['wa']; ?>&text=Assalamu'alaikum,%0APembayaran%20Iuran%20Bulanan%20Belum%20Dilakukan"class=”btn btn-warning”><b style="color:#009900"><i class="btn btn-success "><span class="fa fa-whatsapp"></i></a></td>
							
							
                        </tr>
                    </table>
                    <div class="box-footer">
					<a href="<?php echo base_url(); ?>siswa/printsantri_biodata/<?php echo $siswa['kode'] ?>"class="btn btn-flat btn-warning" title="PRINT"><i class="fa fa-print"> PRINT</i></a>    
                        <?php
                         echo anchor('siswa', 'KEMBALI', array('class'=>'btn btn-danger btn-flat'));
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