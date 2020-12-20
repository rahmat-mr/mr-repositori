 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h3 style="text-align:center" > <font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data Gaji Pegawai </b></h4></font>
             </div>
            <!-- /.box-header -->
            <div class="box-body">
			
			
              <table id="exampl" class="table table-bordered table-striped">
                <thead>
                   <tr class="bg-danger">
                    <th width="24">No.</th>
                    <th width="96">Nomor Induk</th>
                    <th width="142">Nama Pegawai</th>
                    <th width="182">Pembayaran Gaji Terakhir</th>
                    <th width="74">BAYAR Gaji</th>
					<th width="97">Cek Transaksi</th>				                
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($karyawan->result_array() as $mhs) :
                    $no++;
                   
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      
                      <td><?php echo $mhs['kodek']; ?></td>
					  <td><?php echo $mhs['namak']; ?></td>
                     <td><b><?php echo tanpa_tgl_indonesia($mhs['gaji']) ?></td>
					  <td>
                        <a href="<?php echo base_url(); ?>karyawan/bayargaji/<?php echo $mhs['kodek'] ?>" class="btn btn-success">BAYAR</a>
                    </td>
					 <td>
                        <a href="<?php echo base_url(); ?>karyawan/transaksigaji/<?php echo $mhs['kodek'] ?>" class="btn btn-warning"> 
                    <span class="fa fa-credit-card-alt"> TRANS </span></a></a>
                    </td>
					 
                    
					</tr>
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