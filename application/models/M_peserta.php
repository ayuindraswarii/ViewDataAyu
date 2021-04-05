<?php  
class M_peserta extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function tampilPeserta(){
		$query = $this->db->get('peserta');
		return $query->result();
	}
}

?>