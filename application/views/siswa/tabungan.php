 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h3 style="text-align:center" > <font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data Tabungan Santri  </h4></font>
             </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exampl" class="table table-bordered table-striped">
                <thead>
                   <tr class="bg-danger">
                    <th width="24">No.</th>
                    <th width="82">Nomor Induk Santri</th>
                    <th width="180">Nama Santri</th>
                    <th width="135">Tabungan Santri</th>
                    <th width="97">Setoran</th>
					<th width="97">Penarikan</th>
					<th width="97">Cek Transaksi</th>
					
					
                  
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
                     <td><b>Rp. <?php echo number_format($mhs['tabungan'],0,',','.')   ?></td>
					  <td>
                        <a href="<?php echo base_url(); ?>siswa/bayartabungan/<?php echo $mhs['kode'] ?>" class="btn btn-success"> 
                    <span class="fa fa-credit-card-alt"> SETOR </span></a></a>
                    </td>
					 <td>
                        <a href="<?php echo base_url(); ?>siswa/tariktabungan/<?php echo $mhs['kode'] ?>" class="btn btn-success"> 
                    <span class="fa fa-credit-card-alt"> TARIK </span></a></a>
                    </td>
					 <td>
                        <a href="<?php echo base_url(); ?>siswa/transaksitabungan/<?php echo $mhs['kode'] ?>" class="btn btn-warning"> 
                    <span class="fa fa-credit-card-alt"> TRANSAKSI </span></a></a>
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