<!DOCTYPE html>
<html moznomarginboxes mozdisallowselectionprint>
  
<body> <?php  foreach ($siswa as $data): ?>
<table>
    <tr>
	<td style="font-size:  4px"><img src="<?= base_url('uploads/kop/kop2.jpg') ?>" width="1086" height="255"  >       </td>
    </tr>
</table>

 
 
<p align="center" style="font-size: 29px"><b>
     BIODATA SANTRI <br>  <br>  
  <img src="<?= base_url('/uploads/'.$data->foto) ?>" width="149" height="180"></td>
</p>
  </b>  
  <table width="799" height="662" border="0" class="table table-bordered table-striped" style="margin-left:115px" >
  
    
                        <tr>
                            <td style="font-size: 24px" width="321" height="29">Nomor Induk Santri</td>
                            <td style="font-size: 24px" width="41">:</td>
                            <td style="font-size: 24px"width="423"><?php echo $data->kode; ?></td>
                        </tr>
						 <tr>
                            <td style="font-size: 24px">Nama Lengkap</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->nama; ?></td>
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
                            <td style="font-size: 24px">Alamat</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->alamat; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Tanggal Masuk</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo tgl_indonesia($data->tgl_masuk); ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Iuran Bulanan</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo tanpa_tgl_indonesia($data->iuran); ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Jadwal Tasmik</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->jadwal; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Batas Hafalan</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->hafalan; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Prestasi Santri</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->prestasi; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Tabungan Santri</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px">Rp. <?php echo number_format($data->tabungan,0,',','.')   ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Nama Ayah</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->nama_ayah; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Nama Ibu</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->nama_ibu; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Pekerjaan Ayah</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->nama_pekerjaan; ?></td>
                        </tr>
						<tr>
                            <td style="font-size: 24px">Pekerjaan Ibu</td>
                            <td style="font-size: 24px">:</td>
                            <td style="font-size: 24px"><?php echo $data->nama_pekerjaanibu; ?>
                        </tr>
						 
						
</table> 
  <br><br> 
   <p align="right" style="margin-right:100Px";> 
   <a style="font-size: 24px"> Pimpinan Rumah Tahfidz <br><br><br><br><br>
   <p align="right" style="margin-right:103px";>
    <b><a style="font-size: 24px">(Ustadz Jefrizen, S.Sy) <br></b>
  </p>
  <br> <?php endforeach; ?>
  
  <script type="text/javascript">
  window.print();
  </script>

</body>
</html>