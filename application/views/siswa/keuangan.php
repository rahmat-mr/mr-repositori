 <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
			 <h3 style="text-align:center" > <font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data Iuran Bulanan Santri  </h4></font>
             </div>
            <!-- /.box-header -->
            <div class="box-body">
			
			
              <table id="exampl" class="table table-bordered table-striped">
                <thead>
                   <tr class="bg-danger">
                    <th width="24">No.</th>
                    <th width="96">Nomor Induk</th>
                    <th width="166">Nama Santri</th>
                    <th width="135">Iuran Bulanan (LUNAS)</th>
                    <th width="97">BAYAR IURAN</th>
					<th width="97">Cek Transaksi</th>
					<th width="120">WA Orang Tua</th>
					<th width="68">Kirim WA</th>
					
					
                  
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
                     <td><b><?php echo tanpa_tgl_indonesia($mhs['iuran']) ?></td>
					  <td>
                        <a href="<?php echo base_url(); ?>siswa/bayariuran	/<?php echo $mhs['kode'] ?>" class="btn btn-success">BAYAR</a>
                    </td>
					 <td>
                        <a href="<?php echo base_url(); ?>siswa/transaksiiuran/<?php echo $mhs['kode'] ?>" class="btn btn-warning"> 
                    <span class="fa fa-credit-card-alt"> TRANS </span></a></a>
                    </td>
					  <td>+<?php echo $mhs['wa']; ?></td>
					  <td>  <a style="background-image:url(../../../uploads/wa.png)" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $mhs['wa'] ?>&text=Assalamu'alaikum Wr Wb ,%0ADiingatkan%20Kepada%20Bapak/Ibu%20Santri%20Bernama%20<?php echo $mhs['nama'] ?>%20Bahwasannya%20Pembayaran%20Iuran%20Bulanan%20Ini%20Belum%20Dilakukan%0AWassalamu'alaikum Wr Wb" ><i class="btn btn-success "><span class="fa fa-whatsapp"></i></a></td>
                    
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