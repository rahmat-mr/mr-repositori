<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h4 style="text-align:center" ><b><font color="#000033" style="font:Geneva, Arial, Helvetica, sans-serif">Data Santri Rumah Tahfidz Qur'an Zulaykha </b></h4></font>
            </div>
            <!-- /.box-header -->
            
 <div class="box-body">
            <!-- button add -->
           <button class="btn btn-danger" href="<?php echo base_url('Laporansantri/printsantri_m')?>"><i class="fa fa-print"></i>Print</button>

            <div class="box-body">
              <table id="mytable" class="table table-striped table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="3%"><font color="#000033">NO</th>
                        
                        <th width="4%"><font color="#000033">KODE</th>
                        <th width="15%"><font color="#000033">NAMA SANTRI</th>
						<th width="9%"><font color="#000033">TANGGAL MASUK</th>
						<th width="8%"><font color="#000033">IURAN BULAN</th>
                        <th width="34%"><font color="#000033">JADWAL</th>
						<th width="6%"><font color="#000033">BATAS HAFALAN</th>
						
                        
						<th width="10%"><font color="#000033">FOTO</th>
                        <th width="11%"><font color="#000033">AKSI</th>
                    </tr>
                </thead>
			
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
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('siswa/data'); ?>',
                "order": [[ 1, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        
                        "class": "text-center",
                        "orderable": false,
                    },
                    
                    {
                        "data": "kode",
                        "width": "50px",
                       
                    },
                    { 
                        "data": "nama",
						"width": "180px",
                    },
					{ 	
                        "data": "tgl_masuk",
                      	  "width": "90px",
                    },
					{ 
                        "data": "iuran",
						"width": "70px",
                        
                    },
                    { 
                        "data": "jadwal",
                        "width": "80px"
                    },
					 { 
                        "data": "hafalan",
                       "width": "100px",
					   "class": "text-center"
                    },
                    
					{ 
                        "data": "foto",
                        "class": "text-center"
                    },
                    { 
                        "data": "aksi",
                        "width": "100px",
                        "class": "text-center"
                    },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
</script>