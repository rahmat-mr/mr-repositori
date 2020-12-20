<?php

	class Model_karyawan extends CI_Model
	{
		function tampil_karyawan(){
        $hasil = $this->db->query("select * from tbl_karyawan order by kodek asc");
        return $hasil;
		}
		
		function tampil_karyawana(){
		$this->db->order_by('kodek', 'ASC');
        return $this->db->from('tbl_karyawan')
          ->join('tbl_jabatan', 'tbl_jabatan.kd_jabatan=tbl_karyawan.kd_jabatan')
          ->get()
          ->result();
		  
    	}
		
		function m_bayargaji()
		{
				$data = array(
					'namak'          => $this->input->post('namak', TRUE),
					'gaji'          => $this->input->post('gaji', TRUE),
					
					); 
					
			$data1 = array(
				 	
					'kodek'          => $this->input->post('kodek', TRUE),
					'lunas'          => $this->input->post('gaji', TRUE),
					'namak'          => $this->input->post('namak', TRUE),
					'jumlah_gaji' 		 => $this->input->post('jumlah_gaji', TRUE),
					'tgl_gaji'          => $this->input->post('tanggal', TRUE),
					);
		
			
		$this->db->where('kodek',$this->input->post('kodek'));
        $this->db->update('tbl_karyawan',$data);
		$this->db->insert('tbl_gaji',$data1);
		}
		
		function save($foto)
		{
			$data = array(
				//tabel di database => name di form
				'kodek'           => $this->input->post('kodek', TRUE),
				'namak'          => $this->input->post('namak', TRUE),
				'alamat'          => $this->input->post('alamat', TRUE),
				'jk'          => $this->input->post('jk', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
				'kd_jabatan'          => $this->input->post('jabatan', TRUE),
				'pendidikan'          => $this->input->post('pendidikan', TRUE),
				'hp'          => $this->input->post('hp', TRUE),
				'gaji' => $this->input->post('gaji', TRUE),
				'foto'			=> $foto,
		
			);
			$this->db->insert('tbl_karyawan',$data);
			// ketika pengguna menginsert data siswa, maka data kode, kd_kelas dan tahun_akademik_aktif akan otomatis terinsert dengan sendirinya ke tbl_riwayat_kelas
			//$tahun_akademik = $this->db->get_where('tbl_tahun_akademik', array('is_aktif' => 'Y'))->row_array();
			//$riwayat = array(
			//				'kode' 				=> $this->input->post('kode', TRUE),
			//				'kd_kelas'			=> $this->input->post('kelas', TRUE),
			//				'id_tahun_akademik'	=> $tahun_akademik['id_tahun_akademik']
			//			); 
		//	$this->db->insert('tbl_riwayat_kelas', $riwayat);
		}

		function update($foto)
		{
			if (empty($foto)) {
				//update tanpa foto
				$data = array(
				//tabel di database => name di form
				'kodek'           => $this->input->post('kodek', TRUE),
				'namak'          => $this->input->post('namak', TRUE),
				'alamat'          => $this->input->post('alamat', TRUE),
				'jk'          => $this->input->post('jk', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
				'kd_jabatan'          => $this->input->post('jabatan', TRUE),
				'pendidikan'          => $this->input->post('pendidikan', TRUE),
				'hp'          => $this->input->post('hp', TRUE),
				 
					);
			} else {
				//update dengan foto
				$data = array(
				//tabel di database => name di form
				'kodek'           => $this->input->post('kodek', TRUE),
				'namak'          => $this->input->post('namak', TRUE),
				'alamat'          => $this->input->post('alamat', TRUE),
				'jk'          => $this->input->post('jk', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'tempat_lahir'  => $this->input->post('tempat_lahir', TRUE),
				'kd_jabatan'          => $this->input->post('jabatan', TRUE),
				'pendidikan'          => $this->input->post('pendidikan', TRUE),
				'hp'          => $this->input->post('hp', TRUE),
				'foto'			=> $foto,
		
				);
			}

			$kode	= $this->input->post('kodek');
			$this->db->where('kodek', $kode);
			$this->db->update('tbl_karyawan',$data);
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
		    $this->db->insert_batch('tbl_karyawan', $data);
		}

	}
	
?>
