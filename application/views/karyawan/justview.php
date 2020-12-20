<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title"><b><font color="#000033">DATA KARYAWAN </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
           

              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="6%"><font color="#000033">NO</th>
                        
                        <th width="6%"><font color="#000033">KODE</th>
                        <th width="21%">NAMA KARYAWAN</th>
						<th width="10%">GENDER</th>
						<th width="11%">JABATAN</th>
                     
						
						<th width="9%">NO. HP</th>
                        
						<th width="11%">FOTO</th>
                        <th width="15%">AKSI</th>
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
                "ajax": '<?php echo site_url('karyawan/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        
                        "class": "text-center",
                        "orderable": false,
                    },
                    
                    {
                        "data": "kodek",
                        "width": "50px",
                       
                    },
                    { 
                        "data": "namak",
						"width": "180px",
                    },
					{ 
                        "data": "jk",
                      	  "width": "80px",
                    },
					{ 
                        "data": "jabatan",
						"width": "90px",
                        
                    },
                  //  { 
                   //     "data": "pendidikan",
                     //   "width": "100px"
                  //  },
					 { 
                        "data": "hp",
                       "width": "100px",
					   "class": "text-center"
                    },
                   
					{ 
                        "data": "foto",
                        "class": "text-center"
                    },
                    { 
                        "data": "aksi2",
                        "width": "70px",
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