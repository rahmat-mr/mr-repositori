<?php

	class Model_pekerjaanibu extends CI_Model
	{

		function tampil_pekerjaanibu(){
        $hasil = $this->db->query("select * from tbl_pekerjaanibu order by kd_pekerjaanibu asc");
        return $hasil;
    	}
		
		function save()
		{
			$data = array(			
				'nama_pekerjaanibu'          => $this->input->post('nama_pekerjaanibu', TRUE),
			);
			$this->db->insert('tbl_pekerjaanibu', $data);
		}	
		
		function update()
		{
			$data = array(
				'nama_pekerjaanibu'          => $this->input->post('nama_pekerjaanibu', TRUE),
			);
			$kode	= $this->input->post('kd_pekerjaanibu');
			$this->db->where('kd_pekerjaanibu', $kode);
			$this->db->update('tbl_pekerjaanibu', $data);
		}					
	}
	
?>
