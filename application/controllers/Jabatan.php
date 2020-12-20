<?php

	class Jabatan extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_jabatan');
		}
		
		function jabatanview()
		{
			$data['jabatan'] = $this->model_jabatan->tampil_jabatan();
       
			$this->template->load('template', 'jabatan/view' , $data);
		}
		
		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_jabatan->save();
				redirect('jabatan/jabatanview');
			} else {
				$this->template->load('template', 'jabatan/add');
			}
		}

		function delete()
		{
			$kode_jabatan = $this->uri->segment(3);
			if (!empty($kode_jabatan)) {
				$this->db->where('kd_jabatan', $kode_jabatan);
				$this->db->delete('tbl_jabatan');
			} 
			redirect('jabatan/jabatanview');
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_jabatan->update();
				redirect('jabatan/jabatanview');
			} else {
				$kd_jabatan		= $this->uri->segment(3);
				$data['jabatan']	= $this->db->get_where('tbl_jabatan', array('kd_jabatan' => $kd_jabatan))->row_array();
				$this->template->load('template', 'jabatan/edit', $data);
			}
		}

		
		 

	}

?>