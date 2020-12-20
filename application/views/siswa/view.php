 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h3 style="text-align:center" ><font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data  Santri Rumah Tahfizh Qur'an Zulaykha</font> </h4>
			 </font>
            </div>
			      <div class="box-body">
			  <?php
                echo anchor('siswa/add', '<button class="btn bg-navy "><i class="fa fa-save"></i> Tambah Data</button>'); 
                  echo anchor('siswa/printsantri_foto', '<button class="btn btn-warning btn-flat margin"><i class="fa fa-print"></i> Print Tabel</button>'); 
				  echo anchor('siswa/printsantri_allbiodata', '<button class="btn btn-warning"><i class="fa fa-print"></i> Print Biodata</button>'); 
				   echo anchor('siswa/excel', '<button class="btn btn-success btn-flat margin"><i class="fa fa-download"></i> Export Excel</button>'); 
            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exampl"  class="table table-bordered table-striped" style="margin-left:0px">
			  
                <thead>
                <tr class="bg-danger">
      				<th width="24">No.</th>
      				<th width="50">Nomor Induk</th>
			      <th width="150">Nama Santri</th>
				  <th width="56">Jenis Kelamin</th>
   				   <th width="183">Tempat, Tanggal Lahir</th>
   				   <th width="146">Tanngal Bergabung </th>
			      <th width="72">Nama Ayah</th>
  				   <th width="73">Nama Ibu</th>
	  				<th width="70">Foto</th>
					<th width="31">Aksi</th>
					<th width="32">Print</th>
    			</tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($siswa->result_array() as $mhs) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $mhs['kode']; ?></td>
					  <td><?php echo $mhs['nama']; ?></td>
					  <td><?php echo $mhs['jk']; ?></td>
					  <td><?php echo $mhs['tempat_lahir']; ?>,
					    <p><?php echo tgl_indonesia($mhs['tanggal_lahir']); ?></p>
				      </td>
					  <td><?php echo tgl_indonesia($mhs['tgl_masuk']); ?></td>
					  <td><?php echo $mhs['nama_ayah']; ?></td>
					  <td><?php echo $mhs['nama_ibu']; ?></td>						
					  <td><img src="<?= base_url('/uploads/'.$mhs['foto']) ?>" class="img-responsive" style="width: 70px;height: 90px"></td>
					<td>
                    <p><a href="<?php echo base_url(); ?>siswa/lihat/<?php echo $mhs['kode'] ?>" class="btn btn-success btn-xs" title="LIHAT DATA" data-placement="top"><i class="fa fa-eye"></i> </a>                    </p>
                    <p><a href="<?php echo base_url(); ?>siswa/edit/<?php echo $mhs['kode'] ?>" class="btn btn-xs btn-primary" title="EDIT DATA"data-placement="top"><i class="fa fa-edit"></i></a>                    </p>
                    <p><a href="<?php echo base_url(); ?>siswa/delete/<?php echo $mhs['kode'] ?>"class="btn btn-xs btn-danger" title="HAPUS DATA"><i class="fa fa-trash-o"></i></a>              
                    </p>
					</td>
					 <td><p><a href="<?php echo base_url(); ?>siswa/printsantri_biodata/<?php echo $mhs['kode'] ?>"class="btn btn-xs btn-warning" title="PRINT"><i class="fa fa-print"></i></a>              
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
    <!-- /.content -->


    <!-- DataTables -->
   <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script>
      $(function() {
        $('#exampl').DataTable()
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