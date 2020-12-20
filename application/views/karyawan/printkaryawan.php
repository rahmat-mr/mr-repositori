<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
 
 <table style="width: 100%;">
    <tr>
	<td><img src="<?= base_url('uploads/kop/kop2.jpg') ?>" width="1086" height="255"  width: 120px; height: 100px; left: 83px; top: 33px;" >       </td>
    </tr>
</table>

  
 
  <p align="center"><b>
    LAPORAN DATA SANTRI <br>
  </p></b> <br> <div class="box-body">
  <table width="678" class="table table-bordered table-striped" style="margin-left:15px">
    <tr>
      <th width="24">No.</th>
      <th width="50">Nomor Induk</th>
      <th width="92">Nama Santri</th><th width="56">Jenis Kelamin</th>
	   <th width="118">Tempat, Tanggal Lahir</th>
      <th width="72">Jabatan</th>
	  <th width="80">Pendidikan</th>
	  <th width="70">Alamat</th>
	  <th width="76">Foto</th>
    </tr>
    <?php $no = 1; foreach ($karyawan as $data): ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data->kodek; ?></td>
        <td><?php echo $data->namak; ?></td>
		 <td><?php echo $data->jk; ?></td>
		<td><?php echo $data->tempat_lahir;?>,   <p><?php echo tgl_indonesia($data->tanggal_lahir);?></td> 
		<td><?php echo $data->nama_jabatan; ?></td>
		<td><?php echo $data->pendidikan; ?></td>
		<td><?php echo $data->alamat; ?></td>
		
		<td><img src="<?= base_url('/uploads/'.$data->foto) ?>" align="middle" class="img-responsive" style="width: 70px;height: 90px"></td>
      </tr>
    <?php endforeach; ?>
</table>
  <br><br>
   <p align="right" style="margin-right:100Px";>
   Pimpinan Rumah Tahfidz <br><br><br><br>
   <p align="right" style="margin-right:103px";>
    <b>(Ustadz Jefrizen, S.Sy) <br>
  </p></b> <br>
  <script type="text/javascript">
  window.print();
  </script>

</body>
</html>