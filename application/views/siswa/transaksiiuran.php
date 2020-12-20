 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h4 style="text-align:center" ><b><font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Mutasi Tabungan Santri </b></h4></font>
             </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <?php
                         echo anchor('siswa/keuangan', 'KEMBALI', array('class'=>'btn btn-danger btn-flat'));
                        ?><br />
             <br /> <table id="exampl" class="table table-bordered table-striped">
                <thead>
                   <tr class="bg-danger">
                    <th width="24">No.</th>
                    <th width="116">Nomor Induk Santri</th>
                    <th width="146">Nama Santri</th>
                   
					  <th width="135">Jumlah Bayar</th>
					<th width="97">Tanggal Transaksi</th>
                    
					 <th width="97">Iuran (Lunas)</th>
					
					
                  
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($iuran->result_array() as $mhs) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      
                      <td><?php echo $mhs['kodesantri']; ?></td>
					  <td><?php echo $mhs['namasantri']; ?></td>
                    
					
					 <td><b>Rp. <?php echo number_format($mhs['jumlah_iuran'],0,',','.')   ?></td>
					 <td><?php echo tgl_indonesia($mhs['tgl_iuran']); ?></td>
					  <td><?php echo tanpa_tgl_indonesia($mhs['lunas']); ?></td>
					   
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