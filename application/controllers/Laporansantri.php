<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporansantri extends CI_Controller {

  
function __construct() 
    {
      parent::__construct();
      //checkAksesModule();
      //$this->load->library('ssp');
      $this->load->model('model_laporansantri');
    }

	function index()
    	{
        $data['siswa'] = $this->model_laporansantri->tampil_laporan();
        $this->template->load('template', 'laporan/laporansantri', $data);
   		 }

  function printsantri_m()
      {
        $data['siswa'] = $this->model_laporansantri->tampil_laporan("tbl_siswa")->result();
        $this->load->view('laporan/printsantri', $data);
       }

  
}
?>
