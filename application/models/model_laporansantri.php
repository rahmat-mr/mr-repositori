<?php

class Model_laporansantri extends CI_Model
{

function tampil_laporan(){
        $hasil = $this->db->get('tbl_siswa');
    	}


function laporansantri()
		{
				$data = array(
					'nama'          => $this->input->post('nama', TRUE),
					'iuran'          => $this->input->post('iuran', TRUE),				
					);
			$this->db->where('kode',$this->input->post('kode'));
        $this->db->update('tbl_siswa',$data);
		}


}
?>