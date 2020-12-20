<?php

	class Pekerjaan extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_pekerjaan');
		}
		
		function ayahview()
		{
			$data['pekerjaan'] = $this->model_pekerjaan->tampil_pekerjaan();
       
			$this->template->load('template', 'pekerjaan/view' , $data);
		}
		
		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_pekerjaan->save();
				redirect('pekerjaan/ayahview');
			} else {
				$this->template->load('template', 'pekerjaan/add');
			}
		}

		function delete()
		{
			$kode_pekerjaan = $this->uri->segment(3);
			if (!empty($kode_pekerjaan)) {
				$this->db->where('kd_pekerjaan', $kode_pekerjaan);
				$this->db->delete('tbl_pekerjaan');
			} 
			redirect('pekerjaan/ayahview');
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_pekerjaan->update();
				redirect('pekerjaan/ayahview');
			} else {
				$kd_pekerjaan		= $this->uri->segment(3);
				$data['pekerjaan']	= $this->db->get_where('tbl_pekerjaan', array('kd_pekerjaan' => $kd_pekerjaan))->row_array();
				$this->template->load('template', 'pekerjaan/edit', $data);
			}
		}

		
		 

	}

?>