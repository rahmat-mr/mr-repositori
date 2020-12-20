<?php

	class Siswa extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_siswa');
		}
		
		function index()
    	{
        $siswa['siswa'] = $this->model_siswa->tampil_siswa();
        $this->template->load('template', 'siswa/view', $siswa);
    	}
		
		
		
		function orangtua()
    	{
        $siswa['siswa'] = $this->model_siswa->tampil_siswaaa();
        $this->template->load('template', 'siswa/dataorangtua', $siswa);
    	}

    	function printsantri_foto()
    	{
        $data['siswa'] = $this->model_siswa->tampil_siswaa();
        $this->load->view('siswa/printsantri', $data);
    	}
		
		function printsantri_biodata()
		{
			 
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->result();
				$this->load->view('siswa/printsantribiodata', $data);
			 
		}
		
		function printsantri_allbiodata()
		{
			$data['siswa'] = $this->model_siswa->tampil_siswaa();
        	$this->load->view('siswa/printsantriallbiodata', $data);
		}
		

		function add()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_siswa();
				$this->model_siswa->save($uploadFoto);
				redirect('siswa');
			} else {
				$this->template->load('template', 'siswa/add');
			}
		}
		
		function add_pekerjaanayah()
		{
			if (isset($_POST['submit'])) {
				
				$this->model_siswa->add_pekerjaanayah;
				redirect('siswa');
			} else {
				$this->template->load('template', 'siswa/ayah_add');
			}
		}
		
		function lihat()
		{
			
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->row_array();
				$this->template->load('template', 'siswa/lihat', $data); 
		}

		function justview()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_siswa();
				$this->model_siswa->update($uploadFoto);
				redirect('siswa');
			} else {
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->row_array();
				$this->template->load('template', 'siswa/justview', $data);
			}
		}
			 
		function keuangan()
    	{
        $data['siswa'] = $this->model_siswa->tampil_siswa();
        $this->template->load('template', 'siswa/keuangan', $data);
   		 }
		 
		 function tabungan()
    	{
        $data['siswa'] = $this->model_siswa->tampil_siswa();
        $this->template->load('template', 'siswa/tabungan', $data);
   		 }
		 
		 function ayah()
    	{
        $data['pekerjaan'] = $this->model_siswa->tampil_pekerjaan();
        $this->template->load('template', 'siswa/ayah_view', $data);
   		 }
		 
		function transaksitabungan()
		{		
				$kode           = $this->uri->segment(3);
				$data['tabungan'] = $this->db->get_where('tbl_tabungan', array('kodesantri' => $kode));
				 $this->template->load('template', 'siswa/transaksitabungan', $data);		 
		}
		
		function transaksiiuran()
		{
			
				$kode           = $this->uri->segment(3);
				$data['iuran'] = $this->db->get_where('tbl_iuran', array('kodesantri' => $kode));
				 $this->template->load('template', 'siswa/transaksiiuran', $data);			 
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_siswa();
				$this->model_siswa->update($uploadFoto);
				redirect('siswa');
			} else {
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->row_array();
				$this->template->load('template', 'siswa/edit', $data);
			}
		}
		
		function bayariuran()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_siswa();
				$this->model_siswa->m_bayariuran($uploadFoto);
				redirect('siswa/keuangan');
			} else {
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->row_array();
				$this->template->load('template', 'siswa/bayariuran', $data);
			}
		}
		function bayartabungan()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_siswa();
				$this->model_siswa->m_bayartabungan($uploadFoto);
				redirect('siswa/tabungan');
			} else {
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->row_array();
				$this->template->load('template', 'siswa/bayartabungan', $data);
			}
		}
		
		function tariktabungan()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_siswa();
				$this->model_siswa->m_tariktabungan($uploadFoto);
				redirect('siswa/tabungan');
			} else {
				$kode           = $this->uri->segment(3);
				$data['siswa'] = $this->db->get_where('tbl_siswa', array('kode' => $kode))->row_array();
				$this->template->load('template', 'siswa/tariktabungan', $data);
			}
		}


		function delete()
		{
			$kode = $this->uri->segment(3);
			if (!empty($kode)) {
				$this->db->where('kode', $kode);
				$this->db->delete('tbl_siswa');
			} 
			redirect('siswa');
		}
		
		

		function upload_foto_siswa()
		{
			//validasi foto yang di upload
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = '0';
			$config['max_width'] 			= '0';
			$config['max_height'] 			= '0';
            $this->load->library('upload', $config);

            //proses upload
            $this->upload->do_upload('userfile');
            $upload = $this->upload->data();
            return $upload['file_name'];
		}

		// siswa_aktif() -> untuk menampilkan view peserta didik ->terletak di controller Siswa
		// combobox_kelas() -> untuk menampilkan data kelas sesuai jurusan yang dipilih -> terletak di controller Kelas
		// loadDataSiswa() -> untuk menampilkan data siswa kode dan nama sesuai kode_kelas yang dipilih di filter, lalu ditampilkan ke div id = kelas yang bedada di view/siswa_aktif -> terletak di controller Siswa
		function siswa_aktif()
		{
			$this->template->load('template', 'siswa/siswa_aktif');
		}

		function loadDataSiswa()
		{
			$kelas 	= $_GET['kd_kelas'];

			echo "<table class='table table-striped table-bordered table-hover table-full-width dataTable'>
					<tr>
						<th width=100 class='text-center'>KODE</th>
						<th>NAMA</th>
						<th class='text-center'>NILAI</th>
					</tr>";

			//$this->db->where('kd_kelas', $kelas);
			$siswa = $this->db->get('tbl_siswa');
			foreach ($siswa->result() as $row) {
				echo "<tr>
						<td class='text-center'>$row->kode</td>
						<td>$row->nama</td>
						<td class='text-center'>".anchor('siswa/nilai_siswa/'.$row->kode, '<i class="fa fa-eye" aria-hidden="true"></i>')."</td>
					 </tr>";
			}
			echo "</table>";
		}

		
		function nama_pekerjaan()
		{
			$kode 					= $this->uri->segment(3);
			$sql 					= "SELECT ts.kd_pekerjaan, tp.kd_pekerjaan, ts.kode
									  FROM tbl_siswa AS ts, tbl_pekerjaan AS tp
									  WHERE ts.kd_pekerjaan = tp.kd_pekerjaan  ts.kode = '$kode'";
			$data['nama_pekerjaan'] 	= $this->db->query($sql);
			$this->template->load('template', 'siswa/lihat', $data);
		}
		
		function nilai_siswa()
		{
			$kode 					= $this->uri->segment(3);
			$sql 					= "SELECT ts.nama, tm.nama_mapel, tn.nilai
									  FROM tbl_nilai AS tn, tbl_jadwal AS tj, tbl_mapel AS tm, tbl_siswa AS ts
									  WHERE tn.id_jadwal = tj.id_jadwal AND tj.kd_mapel = tm.kd_mapel AND tn.kode = ts.kode AND tn.kode = '$kode'";
			$data['nilai_siswa'] 	= $this->db->query($sql);
			$this->template->load('template', 'siswa/nilai', $data);
		}

		function form(){
		    $data = array(); // Buat variabel $data sebagai array
		    
		    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
		      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
		      $uploadcsv = $this->model_siswa->upload_csv($this->filename);
		      
		      if($uploadcsv['result'] == "success"){ // Jika proses upload sukses
		        // Load plugin PHPExcel nya
		        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		        
		        $csvreader = PHPExcel_IOFactory::createReader('CSV');
		        $loadcsv = $csvreader->load('csv/'.$this->filename.'.csv'); // Load file yang tadi diupload ke folder csv
		        $sheet = $loadcsv->getActiveSheet()->getRowIterator();
		        
		        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
		        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
		        $data['sheet'] = $sheet; 
		      }else{ // Jika proses upload gagal
		        $data['upload_error'] = $uploadcsv['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		      }
		    }
		    
		    $this->load->view('siswa/form', $data);
		  }

		  function import(){
		  	// Load plugin PHPExcel nya
		  	include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		    
		    $csvreader = PHPExcel_IOFactory::createReader('CSV');
		    $loadcsv = $csvreader->load('csv/'.$this->filename.'.csv'); // Load file yang tadi diupload ke folder csv
		    $sheet = $loadcsv->getActiveSheet()->getRowIterator();
		    
		    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		    $data = [];
		    
		    $numrow = 1;
		    foreach($sheet as $row){
		      // Cek $numrow apakah lebih dari 1
		      // Artinya karena baris pertama adalah nama-nama kolom
		      // Jadi dilewat saja, tidak usah diimport
		      if($numrow > 1){
		        // START -->
		        // Skrip untuk mengambil value nya
		        $cellIterator = $row->getCellIterator();
		        $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
		        
		        $get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
		        foreach ($cellIterator as $cell) {
		          array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
		        }
		        // <-- END
		        
		        // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
		        $kode = $get[0]; // Ambil data NIS dari kolom A di csv
		        $nama = $get[1]; // Ambil data nama dari kolom B di csv
		        $tanggal_lahir = $get[2]; // Ambil data jenis kelamin dari kolom C di csv
		        $tempat_lahir = $get[3]; // Ambil data alamat dari kolom D di csv
		        
		        // Kita push (add) array data ke variabel data
		        array_push($data, [
		          'kode'=>$kode, // Insert data nis
		          'nama'=>$nama, // Insert data nama
		          'tanggal_lahir'=>$tanggal_lahir, // Insert data jenis kelamin
		          'tempat_lahir'=>$tempat_lahir, // Insert data alamat
		        ]);
		      }
		      
		      $numrow++; // Tambah 1 setiap kali looping
		    }
		    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		    $this->model_siswa->insert_multiple($data);
		    
		    redirect("Siswa"); // Redirect ke halaman awal (ke controller siswa fungsi index)
		  }

		  function naik_kelas() {
		  	$this->template->load('template', 'siswa/naik_kelas');
		  }

		  function Naiksiswa()
			{
				$kelas 	= $_GET['kd_kelas'];

				echo "<table class='table table-striped table-bordered table-hover table-full-width dataTable'>
						<tr>
							<th width=100 class='text-center'>KODE</th>
							<th>NAMA</th>
						</tr>";

				$this->db->where('kd_kelas', $kelas);
				$siswa = $this->db->get('tbl_siswa');
				foreach ($siswa->result() as $row) {
					echo "<tr>
							<td class='text-center'>$row->kode</td>
							<td>$row->nama</td>
						 </tr>";
				}
				echo "</table>";
			}

		function excel()
		{
		 $data  = $this->model_siswa->tampil_siswaexcel('tbl_siswa')->result();
		 
         
		 require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		 require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		 
		 $object = new PHPExcel();
		 $object->getproperties()->setCreator("Muhammad Rahmat");
		 
		 $object->setActiveSheetIndex(0);
		 
		 $object->getActiveSheet()->setCellValue('A1', 'NO');
		 $object->getActiveSheet()->setCellValue('B1', 'NIS');
		 $object->getActiveSheet()->setCellValue('C1', 'NAMASANTRI');
		 $object->getActiveSheet()->setCellValue('D1', 'JENIS KELAMIN');
		 $object->getActiveSheet()->setCellValue('E1', 'TEMPAT LAHIR');
		 $object->getActiveSheet()->setCellValue('F1', 'TANGGAL LAHIR');
		 $object->getActiveSheet()->setCellValue('G1', 'ALAMAT');
		 $object->getActiveSheet()->setCellValue('H1', 'TANGGAL MASUK');
		 $object->getActiveSheet()->setCellValue('I1', 'IURAN BULANAN');
		 $object->getActiveSheet()->setCellValue('J1', 'JADWAL TASMIK');
		 $object->getActiveSheet()->setCellValue('K1', 'BATAS HAFALAN');
		 $object->getActiveSheet()->setCellValue('L1', 'PRESTASI SANTRI');
		 $object->getActiveSheet()->setCellValue('M1', 'TABUNGAN SANTRI');
		 $object->getActiveSheet()->setCellValue('N1', 'NAMA AYAH');
		 $object->getActiveSheet()->setCellValue('O1', 'NAMA IBU');
		 $object->getActiveSheet()->setCellValue('P1', 'PEKERJAAN AYAH');
		 $object->getActiveSheet()->setCellValue('Q1', 'PEKERJAAN IBU');
		 $object->getActiveSheet()->setCellValue('R1', 'NO. HP ORANG TUA');
		 
		 $baris = 2;
		 $no = 1;
		 
		 foreach ($data  as $mhs) {
		 $object->getActiveSheet()->setCellValue('A' .$baris, $no++);
		 $object->getActiveSheet()->setCellValue('B' .$baris, $mhs->kode);
		 $object->getActiveSheet()->setCellValue('C' .$baris, $mhs->nama);
		 $object->getActiveSheet()->setCellValue('D' .$baris, $mhs->jk);
		 $object->getActiveSheet()->setCellValue('E' .$baris, $mhs->tempat_lahir);
		 $object->getActiveSheet()->setCellValue('F' .$baris, tgl_indonesia($mhs->tanggal_lahir));
		 $object->getActiveSheet()->setCellValue('G' .$baris, $mhs->alamat);
		 $object->getActiveSheet()->setCellValue('H' .$baris, tgl_indonesia($mhs->tgl_masuk));
		 $object->getActiveSheet()->setCellValue('I' .$baris, tanpa_tgl_indonesia($mhs->iuran));
		 $object->getActiveSheet()->setCellValue('J' .$baris, $mhs->jadwal);
		 $object->getActiveSheet()->setCellValue('K' .$baris, $mhs->hafalan);
		 $object->getActiveSheet()->setCellValue('L' .$baris, $mhs->prestasi);
		 $object->getActiveSheet()->setCellValue('M' .$baris, $mhs->tabungan);
		 $object->getActiveSheet()->setCellValue('N' .$baris, $mhs->nama_ayah);
		 $object->getActiveSheet()->setCellValue('O' .$baris, $mhs->nama_ibu);
		 $object->getActiveSheet()->setCellValue('P' .$baris, $mhs->nama_pekerjaan);
		 $object->getActiveSheet()->setCellValue('Q' .$baris, $mhs->nama_pekerjaanibu);
		 $object->getActiveSheet()->setCellValue('R' .$baris, $mhs->wa);
		 
		 $baris++;
    	}
		 $filename="DATA SANTRI RUMAH TAHFIZH".'.xlsx';
		 
		 $object->getActiveSheet()->setTitle("Data Santri");
		 
		 header('content-type: application/
		 	vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0`');
		
		$writer=PHPExcel_IOfactory::createwriter($object, 'Excel2007');
		ob_end_clean();
		$writer->save('php://output');
		exit;
		} 

	}

?>