<?php

	class Tampilan_utama extends CI_Controller
	{
		
		function index()
		{
			$quser = 'SELECT COUNT(*) AS hasil FROM tbl_user';
			$data['user'] = $this->db->query($quser)->row_array();

			$qsiswa = 'SELECT COUNT(*) AS hasil FROM tbl_siswa';
			$data['siswa'] = $this->db->query($qsiswa)->row_array();

			$qguru = 'SELECT COUNT(*) AS hasil FROM tbl_karyawan';
			$data['karyawan'] = $this->db->query($qguru)->row_array();

			$qruangan = 'SELECT COUNT(*) AS hasil FROM tbl_jabatan';
			$data['jabatan'] = $this->db->query($qruangan)->row_array();
			
			$qruangan = 'SELECT COUNT(*) AS hasil FROM tbl_jabatan';
			$data['jabatan'] = $this->db->query($qruangan)->row_array();
			
			$qtabungan = 'SELECT SUM(tabungan_sekarang) AS hasil FROM tbl_tabungan';
			$data['tabungan'] = $this->db->query($qtabungan)->row_array();
			
			$qiuran = 'SELECT SUM(jumlah_iuran) AS hasil FROM tbl_iuran';
			$data['iuran'] = $this->db->query($qiuran)->row_array();

			$this->template->load('template', 'dashboard', $data);
		}

	}

?>