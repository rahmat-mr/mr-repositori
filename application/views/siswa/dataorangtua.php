 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h3 style="text-align:center" > <font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data Orang Tua Santri </font></b> </h4>
			 </font>
            </div>
			      <div class="box-body">
			  <?php
               
                 
            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exampl"  class="table table-bordered table-striped" style="margin-left:0px">
			  
                <thead>
                <tr class="bg-danger">
      				<th width="24">No.</th>
      				<th width="50">Nomor Induk</th>
			      <th width="168">Nama Santri</th>
				 <th width="97">Iuran (LUNAS)</th>
			      <th width="112">Nama Ayah</th>
  				   <th width="121">Nama Ibu</th>
				    <th width="120">Pekerjaan Ayah</th>
					 <th width="99">PekerjaanIbu</th>
					  <th width="95">WA Orangtua</th>
	  				
					
    			</tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($siswa as $mhs) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $mhs ->kode; ?></td>
					  <td><?php echo $mhs ->nama; ?></td>
					  <td><?php echo tanpa_tgl_indonesia($mhs ->iuran); ?></td>
					  
					  <td><?php echo $mhs ->nama_ayah; ?></td>
					  <td><?php echo $mhs ->nama_ibu; ?></td>			
					  <td><?php echo $mhs ->nama_pekerjaan; ?></td>
					  <td><?php echo $mhs ->nama_pekerjaanibu; ?></td>		
					  <td>+<?php echo $mhs ->wa; ?></td>			
					   
					   
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