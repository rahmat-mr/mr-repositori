<?php

	class Pekerjaanibu extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_pekerjaanibu');
		}
		
		function ibuview()
		{
			$data['pekerjaanibu'] = $this->model_pekerjaanibu->tampil_pekerjaanibu();
       
			$this->template->load('template', 'pekerjaanibu/view' , $data);
		}
		
		function add()
		{
			if (isset($_POST['submit'])) {
				$this->model_pekerjaan->save();
				redirect('pekerjaanibu/ibuview');
			} else {
				$this->template->load('template', 'pekerjaanibu/add');
			}
		}

		function delete()
		{
			$kode_pekerjaanibu = $this->uri->segment(3);
			if (!empty($kode_pekerjaanibu)) {
				$this->db->where('kd_pekerjaanibu', $kode_pekerjaanibu);
				$this->db->delete('tbl_pekerjaanibu');
			} 
			redirect('pekerjaanibu/ibuview');
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$this->model_pekerjaanibu->update();
				redirect('pekerjaanibu/ibuview');
			} else {
				$kd_pekerjaanibu		= $this->uri->segment(3);
				$data['pekerjaanibu']	= $this->db->get_where('tbl_pekerjaanibu', array('kd_pekerjaanibu' => $kd_pekerjaanibu))->row_array();
				$this->template->load('template', 'pekerjaanibu/edit', $data);
			}
		}

		
		 

	}

?>