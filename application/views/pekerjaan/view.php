 <section class="content">
      <div class="row">
        <div class="col-xs-7">

          <div class="box">
            <div class="box-header">
			 <h4 style="text-align:eft" ><b><font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data  Pekerjaan Ayah</font></b> </h4>
			 </font>
            </div>
			      <div class="box-body">
			  <?php
                echo anchor('pekerjaan/add', '<button class="btn bg-navy "><i class="fa fa-save"></i> Tambah Data</button>'); 
                 
            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table height="48"  class="table table-bordered table-striped" id="exampl" style="margin-left:0px">
			  
                <thead>
                <tr class="bg-danger">
      				<th width="24">No.</th>
      				 
			      <th width="181">Nama Pekerjaan</th>
				  <th width="75">Aksi</th>
				 
    			</tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($pekerjaan->result_array() as $mhs) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td height="21"><?php echo $no; ?></td>
                      <td><?php echo $mhs['nama_pekerjaan']; ?></td>
					  
					
					<td>
                                    
                   <a href="<?php echo base_url(); ?>pekerjaan/edit/<?php echo $mhs['kd_pekerjaan'] ?>" class="btn btn-xs btn-success" title="EDIT DATA"data-placement="top"><i class="fa fa-edit"></i></a>                 
                    <a href="<?php echo base_url(); ?>pekerjaan/delete/<?php echo $mhs['kd_pekerjaan'] ?>"class="btn btn-xs btn-danger" title="HAPUS DATA"><i class="fa fa-trash-o"></i></a>              
                    </p>
					</td>
					        
                    <td width="0"></p></tr>
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