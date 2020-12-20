<?php

	class Karyawan extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_karyawan');
		}

		function index()
		{
		  $karyawan['karyawan'] = $this->model_karyawan->tampil_karyawana();
        $this->template->load('template', 'karyawan/view', $karyawan);
		}

		function add()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_karyawan();
				$this->model_karyawan->save($uploadFoto);
				redirect('karyawan');
			} else {
				$this->template->load('template', 'karyawan/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_karyawan();
				$this->model_karyawan->update($uploadFoto);
				redirect('karyawan');
			} else {
				$kodek           = $this->uri->segment(3);
				$data['karyawan'] = $this->db->get_where('tbl_karyawan', array('kodek' => $kodek))->row_array();
				$this->template->load('template', 'karyawan/edit', $data);
			}
		}
		
		function lihat()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_karyawan();
				$this->model_karyawan->update($uploadFoto);
				redirect('karyawan');
			} else {
				$kodek           = $this->uri->segment(3);
				$data['karyawan'] = $this->db->get_where('tbl_karyawan', array('kodek' => $kodek))->row_array();
				$this->template->load('template', 'karyawan/lihat', $data);
			}
		}
		
		function justview()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_karyawan();
				$this->model_karyawan->update($uploadFoto);
				redirect('karyawan');
			} else {
				$kodek           = $this->uri->segment(3);
				$data['karyawan'] = $this->db->get_where('tbl_karyawan', array('kodek' => $kodek))->row_array();
				$this->template->load('template', 'karyawan/justview', $data);
			}
		}


		function delete()
		{
			$kodek = $this->uri->segment(3);
			if (!empty($kodek)) {
				$this->db->where('kodek', $kodek);
				$this->db->delete('tbl_karyawan');
			} 
			redirect('karyawan');
		}
		
		function gaji()
    	{
        $data['karyawan'] = $this->model_karyawan->tampil_karyawan();
        $this->template->load('template', 'karyawan/gaji', $data);
   		 }

		function bayargaji()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_karyawan();
				$this->model_karyawan->m_bayargaji($uploadFoto);
				redirect('karyawan/gaji');
			} else {
				
				$kode           = $this->uri->segment(3);
				$data['karyawan'] = $this->db->get_where('tbl_karyawan', array('kodek' => $kode))->row_array();
				$this->template->load('template', 'karyawan/bayargaji', $data);
		}
		}
		
		function transaksigaji()
		{
			
				$kode           = $this->uri->segment(3);
				$data['gaji'] = $this->db->get_where('tbl_gaji', array('kodek' => $kode));
				 $this->template->load('template', 'karyawan/transaksigaji', $data);			 
		}
		function printkaryawan_foto()
    	{
        $data['karyawan'] = $this->model_karyawan->tampil_karyawana();
        $this->load->view('karyawan/printkaryawan', $data);
    	}
		
		function printkaryawan_biodata()
		{
			 
				$kode           = $this->uri->segment(3);
				$data['karyawan'] = $this->db->get_where('tbl_karyawan', array('kodek' => $kode))->result();
				$this->load->view('karyawan/printkaryawanbiodata', $data);
			 
		}
		
		function printkaryawan_allbiodata()
		{
			$data['karyawan'] = $this->model_karyawan->tampil_karyawana();
        	$this->load->view('karyawan/printkaryawanallbiodata', $data);
		}
		function upload_foto_karyawan()
		{
			//validasi foto yang di upload
			$config['upload_path']          = './uploads/karyawan';
           $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = '5120';
			$config['max_width'] 			= '0';
			$config['max_height'] 			= '0';
            $this->load->library('upload', $config);

            //proses upload
            $this->upload->do_upload('userfile');
            $upload = $this->upload->data();
            return $upload['file_name'];
		}

		// karyawan_aktif() -> untuk menampilkan view peserta didik ->terletak di controller karyawan
		// combobox_kelas() -> untuk menampilkan data kelas sesuai jurusan yang dipilih -> terletak di controller Kelas
		// loadDatakaryawan() -> untuk menampilkan data karyawan kodek dan nama sesuai kodek_kelas yang dipilih di filter, lalu ditampilkan ke div id = kelas yang bedada di view/karyawan_aktif -> terletak di controller karyawan
		

}
?>