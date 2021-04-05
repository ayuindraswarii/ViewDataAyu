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

	public function tambah(){
		$this->load->view('tambah.php');
	}

	// tambah data
	public function insert(){
		$pst['nama']=$this->input->post('nama');
		$pst['kelas']=$this->input->post('kelas');
		$pst['sekolah']=$this->input->post('sekolah');
		$pst['asal_kota']=$this->input->post('asal_kota');

		$query=$this->M_peserta->insertpst($pst);

		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function ubah($no_peserta)
	{
		$data['pst']=$this->M_peserta->getpst($no_peserta);
		$this->load->view('ubah',$data);
	}

	public function update($no_peserta)
	{
		$pst['nama']=$this->input->post('nama');
		$pst['kelas']=$this->input->post('kelas');
		$pst['sekolah']=$this->input->post('sekolah');
		$pst['asal_kota']=$this->input->post('asal_kota');	

		$query=$this->M_peserta->updatepst($pst,$no_peserta);

		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function hapus($no_peserta){
	  	$query=$this->M_peserta->delpst($no_peserta);
	    
	    if ($query) {
			header('location:'.base_url().$this->index());
		}
	}
}

?>