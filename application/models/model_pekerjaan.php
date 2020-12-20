<?php

	class Model_pekerjaan extends CI_Model
	{

		function tampil_pekerjaan(){
        $hasil = $this->db->query("select * from tbl_pekerjaan order by kd_pekerjaan asc");
        return $hasil;
    	}
		
		function save()
		{
			$data = array(			
				'nama_pekerjaan'          => $this->input->post('nama_pekerjaan', TRUE),
			);
			$this->db->insert('tbl_pekerjaan', $data);
		}	
		
		function update()
		{
			$data = array(
				'nama_pekerjaan'          => $this->input->post('nama_pekerjaan', TRUE),
			);
			$kode	= $this->input->post('kd_pekerjaan');
			$this->db->where('kd_pekerjaan', $kode);
			$this->db->update('tbl_pekerjaan', $data);
		}					
	}
	
?>
