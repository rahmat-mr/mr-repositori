<?php

	class Model_jabatan extends CI_Model
	{

		function tampil_jabatan(){
        $hasil = $this->db->query("select * from tbl_jabatan order by kd_jabatan asc");
        return $hasil;
    	}
		
		function save()
		{
			$data = array(			
				'nama_jabatan'          => $this->input->post('nama_jabatan', TRUE),
			);
			$this->db->insert('tbl_jabatan', $data);
		}	
		
		function update()
		{
			$data = array(
				'nama_jabatan'          => $this->input->post('nama_jabatan', TRUE),
			);
			$kode	= $this->input->post('kd_jabatan');
			$this->db->where('kd_jabatan', $kode);
			$this->db->update('tbl_jabatan', $data);
		}					
	}
	
?>
