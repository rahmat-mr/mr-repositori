<!DOCTYPE html>
<html moznomarginboxes mozdisallowselectionprint>
 
   
  
  
  
<body> <?php  foreach ($karyawan as $data): ?>
<table>
    <tr>
	<td style="font-size: 24px"><img src="<?= base_url('uploads/kop/kop2.jpg') ?>" width="1086" height="255"  >       </td>
    </tr>
</table>

 
 
<p align="center" style="font-size: 29px"><b>
      BIODATA PEGAWAI RUMAH TAHFIZ <br>  <br>  
  <img src="<?= base_url('/uploads/'.$data->foto) ?>" width="149" height="194"></td>
</p>
  </b>  
  <table width="799" height="425" border="0" class="table table-bordered table-striped" style="margin-left:115px" >
  
    
                        <tr>
                            <td style="font-size: 24px" width="321" height="46">Nama Pegawai</td>
                            <td style="font-size: 24px" width="41">:</td>
                            <td style="font-size: 24px"width="423"><?php echo $data->namak; ?></td>
                        </tr>
					  
						 <tr>
                            <td style="font-size: 24px">Jenis Kelamin</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->jk; ?></td>
                        </tr>
                        <tr>
                            <td style="font-size: 24px">Tempat Lahir</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->tempat_lahir; ?></td>
                        </tr>
                        <tr>
                            <td style="font-size: 24px">Tanggal Lahir</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo tgl_indonesia($data->tanggal_lahir); ?></td>
                        </tr>
						
						<tr>
                            <td style="font-size: 24px">Jabatan</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->nama_jabatan;  ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Pendidikan</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->pendidikan; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Alamat</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->alamat; ?></td>
                        </tr>
						 
						 
					 
						 
						
</table> 
  <br><br> 
   <p align="right" style="margin-right:100Px";> 
   <a style="font-size: 24px"> Pimpinan Rumah Tahfidz <br><br><br><br><br>
   <p align="right" style="margin-right:103px";>
    <b><a style="font-size: 24px">(Ustadz Jefrizen, S.Sy) <br><br><br><br><br><br></b>
  </p>
  <br> <?php endforeach; ?>
  
  <script type="text/javascript">
  window.print();
  </script>

</body>
</html>