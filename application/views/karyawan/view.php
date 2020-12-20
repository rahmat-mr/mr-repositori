 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h3 style="text-align:center" > <font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data  Pegawai Rumah Tahfizh Qur'an Zulaykha</font>  </h4>
			 </font>
            </div>
			      <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('karyawan/add', '<button class="btn bg-navy btn-flat margin">Tambah Data</button>');
                echo anchor('karyawan/printkaryawan_foto', '<button class="btn btn-warning"><i class="fa fa-print"></i> Print Tabel</button>'); 
				  echo anchor('karyawan/printkaryawan_allbiodata', '<button class="btn btn-warning btn-flat margin"><i class="fa fa-print"></i> Print Biodata</button>'); 
                
            ?>

              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-danger">
                        <th width="24"><font color="#000033">NO</th>
                        
                        <th width="36"><font color="#000033">Kode</th>
                        <th width="132"><font color="#000033">Nama</th>
						<th width="56"><font color="#000033">Jenis Kelamin</th>
						<th width="316">Tempat, Tanggal Lahir</th>
						<th width="53"><font color="#000033">Jabatan</th>	
						<th width="74"><font color="#000033">Pendidikan</th>					
						<th width="104"><font color="#000033">Alamat</th>                       
						<th width="100"><font color="#000033">FOTO</th>
                        <th width="38"><font color="#000033">AKSI</th>
						 <th width="49"><font color="#000033">PRINT</th>
                    </tr>
                </thead>
				 <tbody>
                  <?php
                  $no = 0;
                   foreach ($karyawan as $mhs):
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $mhs->kodek; ?></td>
					  <td><?php echo $mhs->namak; ?></td>
					  <td><?php echo $mhs->jk; ?></td>
					   <td><?php echo $mhs->tempat_lahir; ?>,
					    <p><?php echo tgl_indonesia($mhs->tanggal_lahir); ?></p>
				      </td>
					  <td> <?php                   	              			
							  echo $mhs->nama_jabatan; ?></td>
					   <td><?php echo $mhs->pendidikan; ?></td>	
					  <td><?php echo $mhs->alamat; ?></td>						
					  <td><img src="<?= base_url('/uploads/'.$mhs->foto) ?>" class="img-responsive" style="width: 100px;height: 95px"></td>
					<td>
                    <p><a href="<?php echo base_url(); ?>karyawan/lihat/<?php echo $mhs->kodek ?>" class="btn btn-success btn-xs" title="LIHAT DATA" data-placement="top"><i class="fa fa-eye"></i> </a>                    </p>
                    <p><a href="<?php echo base_url(); ?>karyawan/edit/<?php echo $mhs->kodek ?>" class="btn btn-xs btn-primary" title="EDIT DATA"data-placement="top"><i class="fa fa-edit"></i></a>                    </p>
                    <p><a href="<?php echo base_url(); ?>karyawan/delete/<?php echo $mhs->kodek ?>"class="btn btn-xs btn-danger" title="HAPUS DATA"><i class="fa fa-trash-o"></i></a>              
                    </p>
					</td>
					 <td><p><a href="<?php echo base_url(); ?>karyawan/printkaryawan_biodata/<?php echo $mhs->kodek ?>"class="btn btn-xs btn-warning" title="PRINT"><i class="fa fa-print"></i></a>              
                    </p></tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->
 <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script>
      $(function() {
        $('#example').DataTable()
        $('#example2').DataTable({
          'paging': true,
          'lengthChange': true,
          'searching': true,
          'ordering': true,
          'info': true,
          'autoWidth': false
        })
      })
    </script>