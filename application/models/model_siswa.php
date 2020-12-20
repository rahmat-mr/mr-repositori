<?php

	class Model_siswa extends CI_Model
	{
		function tampil_siswa(){
        $hasil = $this->db->query("select * from tbl_siswa order by kode asc");
        return $hasil;
		}
		
		function tampil_siswaa(){
		$this->db->order_by('kode', 'ASC');
        return $this->db->from('tbl_siswa')
          ->join('tbl_pekerjaan', 'tbl_pekerjaan.kd_pekerjaan=tbl_siswa.kd_pekerjaan')
		  ->join('tbl_pekerjaanibu', 'tbl_pekerjaanibu.kd_pekerjaanibu=tbl_siswa.kd_pekerjaanibu')
          ->get()
          ->result();
		  
    	}
		
		function tampil_siswaaa(){
		$this->db->order_by('kode', 'ASC');
        return $this->db->from('tbl_siswa')
          ->join('tbl_pekerjaan', 'tbl_pekerjaan.kd_pekerjaan=tbl_siswa.kd_pekerjaan')
		  ->join('tbl_pekerjaanibu', 'tbl_pekerjaanibu.kd_pekerjaanibu=tbl_siswa.kd_pekerjaanibu')
          ->get()
          ->result();
		  
    	}
		
		function tampil_siswaexcel(){
		$this->db->order_by('kode', 'ASC');
        return $this->db->from('tbl_siswa')
          ->join('tbl_pekerjaan', 'tbl_pekerjaan.kd_pekerjaan=tbl_siswa.kd_pekerjaan')
		  ->join('tbl_pekerjaanibu', 'tbl_pekerjaanibu.kd_pekerjaanibu=tbl_siswa.kd_pekerjaanibu')
          ->get()
          ;
		  
    	}
		
		function tampil_siswaaaa(){ 
        return $this->db->get('tbl_siswa');
    	}
		
		
		function tampil_tabungan(){
        $hasil = $this->db->query("select * from tbl_tabungan order by kodesantri asc");
        return $hasil;
    	}
		
		function m_bayariuran()
		{
				$data = array(
					'nama'          => $this->input->post('nama', TRUE),
					'iuran'          => $this->input->post('iuran', TRUE),
					
					); 
					
			$data1 = array(
				 	
					'kodesantri'          => $this->input->post('kode', TRUE),
					'lunas'          => $this->input->post('iuran', TRUE),
					'namasantri'          => $this->input->post('nama', TRUE),
					'jumlah_iuran' 		 => $this->input->post('jumlah_iuran', TRUE),
					'tgl_iuran'          => $this->input->post('tanggal', TRUE),
					);
		
			
		$this->db->where('kode',$this->input->post('kode'));
        $this->db->update('tbl_siswa',$data);
		$this->db->insert('tbl_iuran',$data1);
		}
		
		function m_bayartabungan()
		{ 
				$data = array(
					'nama'          => $this->input->post('nama', TRUE),
					'tabungan'          => $this->input->post('tabungan' , TRUE) + $this->input->post('tabungan2' , TRUE),
					
					);
					
				$data1 = array(
				 	
					'kodesantri'          => $this->input->post('kode', TRUE),
					'namasantri'          => $this->input->post('nama', TRUE),
					'setor' 		 => $this->input->post('tabungan2', TRUE),
					'tabungan_sekarang' 		 => $this->input->post('tabungan' , TRUE) + $this->input->post('tabungan2' , TRUE),
					'tgl_tabungan'          => $this->input->post('tanggal', TRUE),
					);
		
			
		$this->db->where('kode',$this->input->post('kode'));
        $this->db->update('tbl_siswa',$data);
		$this->db->insert('tbl_tabungan',$data1);
		}
		function m_tariktabungan()
		{
				$data = array(
					'nama'          => $this->input->post('nama', TRUE),
					'tabungan'          => $this->input->post('tabungan' , TRUE) - $this->input->post('tabungan3' , TRUE),
					
					);
				$data1 = array(
					'kodesantri'          => $this->input->post('kode', TRUE),
					'namasantri'          => $this->input->post('nama', TRUE),
					'tarik' 		 => $this->input->post('tabungan3', TRUE),
					'tgl_tabungan'          => $this->input->post('tanggal', TRUE),
					'tabungan_sekarang' 		 => $this->input->post('tabungan' , TRUE) - $this->input->post('tabungan3' , TRUE),
					);
			
		$this->db->where('kode',$this->input->post('kode'));
        $this->db->update('tbl_siswa',$data);
		$this->db->insert('tbl_tabungan',$data1);
		}
		
		function save($foto)
		{
			$data = array(
				//tabel di database => name di form
				'kode'           => $this->input->post('kode', TRUE),
				'nama'          => $this->input->post('nama', TRUE),
				'jk'          => $this->input->post('jk', TRUE),
				
				'hafalan'          => $this->input->post('hafalan', TRUE),
				'jadwal'          => $this->input->post('jadwal', TRUE),
				'prestasi'          => $this->input->post('prestasi', TRUE),
				'iuran'          => $this->input->post('iuran', TRUE),
				'alamat'          => $this->input->post('alamat', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
				'tgl_masuk'          => $this->input->post('tgl_masuk', TRUE),
				'tabungan'        => $this->input->post('tabungan', TRUE),
				'nama_ayah'        => $this->input->post('nama_ayah', TRUE),
				'nama_ibu'        => $this->input->post('nama_ibu', TRUE),
				'kd_pekerjaan'        => $this->input->post('pekerjaan', TRUE),
				'kd_pekerjaanibu'        => $this->input->post('pekerjaanibu', TRUE),
				'wa'        => $this->input->post('wa', TRUE),
				'foto'			=> $foto,
		
			);
			$this->db->insert('tbl_siswa',$data);
			
}
	
		function update($foto)
		{
			if (empty($foto)) {
				//update tanpa foto
				$data = array(
					'nama'          => $this->input->post('nama', TRUE),
				    'jk'          => $this->input->post('jk', TRUE),
			
					'hafalan'          => $this->input->post('hafalan', TRUE),
					'jadwal'          => $this->input->post('jadwal', TRUE),
					'prestasi'          => $this->input->post('prestasi', TRUE),
					'iuran'          => $this->input->post('iuran', TRUE),
					'alamat'          => $this->input->post('alamat', TRUE),
					'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
					'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
					
						'tgl_masuk'          => $this->input->post('tgl_masuk', TRUE),
				'tabungan'        => $this->input->post('tabungan', TRUE),
				'nama_ayah'        => $this->input->post('nama_ayah', TRUE),
				'nama_ibu'        => $this->input->post('nama_ibu', TRUE),
				'kd_pekerjaan'        => $this->input->post('pekerjaan', TRUE),
				'kd_pekerjaanibu'        => $this->input->post('pekerjaanibu', TRUE),
				'wa'        => $this->input->post('wa', TRUE),
				
					);
			} else {
				//update dengan foto
				$data = array(
					'nama'          => $this->input->post('nama', TRUE),
					
				'jk'          => $this->input->post('jk', TRUE),
				'hafalan'          => $this->input->post('hafalan', TRUE),
				'jadwal'          => $this->input->post('jadwal', TRUE),
				'prestasi'          => $this->input->post('prestasi', TRUE),
				'iuran'          => $this->input->post('iuran', TRUE),
				'alamat'          => $this->input->post('alamat', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
				'tgl_masuk'          => $this->input->post('tgl_masuk', TRUE),
				'tabungan'        => $this->input->post('tabungan', TRUE),
				'nama_ayah'        => $this->input->post('nama_ayah', TRUE),
				'nama_ibu'        => $this->input->post('nama_ibu', TRUE),
				'kd_pekerjaan'        => $this->input->post('pekerjaan', TRUE),
				'kd_pekerjaanibu'        => $this->input->post('pekerjaanibu', TRUE),
				'wa'        => $this->input->post('wa', TRUE),
				'foto'			=> $foto,
				);
			}
			$kode	= $this->input->post('kode');
			$this->db->where('kode', $kode);
			$this->db->update('tbl_siswa',$data);
		}

		function m_pekerjaanayah()
		{
				$data = array(
					'nama_pekerjaan'          => $this->input->post('nama_pekerjaan', TRUE),
					'kd_pekerjaan'          => $this->input->post('kd_pekerjaan', TRUE),
					
					); 
					
			$data1 = array(
				 	
					'kodesantri'          => $this->input->post('kode', TRUE),
					'lunas'          => $this->input->post('iuran', TRUE),
					'namasantri'          => $this->input->post('nama', TRUE),
					'jumlah_iuran' 		 => $this->input->post('jumlah_iuran', TRUE),
					'tgl_iuran'          => $this->input->post('tanggal', TRUE),
					);
		
			
		$this->db->where('kode',$this->input->post('kode'));
        $this->db->update('tbl_siswa',$data);
		$this->db->insert('tbl_iuran',$data1);
		}



		// Fungsi untuk melakukan proses upload file
	  	public function upload_csv($filename){
		    $this->load->library('upload'); // Load librari upload
		    
		    $config['upload_path'] = './csv/';
		    $config['allowed_types'] = 'csv';
		    $config['max_size']  = '5120';
		    $config['max_width'] = '0';
			$config['max_height'] = '0';
		  
		    $this->upload->initialize($config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
		      // Jika berhasil :
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		      return $return;
		    }else{
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		  }
	  
		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		public function insert_multiple($data){
		    $this->db->insert_batch('tbl_siswa', $data);
		}

	}
	
?>
