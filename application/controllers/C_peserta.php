<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_peserta extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_peserta');
	}

	public function index(){
		$data['peserta'] = $this->M_peserta->tampilPeserta();
		$this->load->view('V_peserta.php', $data);
	}
}

?>