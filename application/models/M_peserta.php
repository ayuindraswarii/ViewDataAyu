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

		public function insertpst($pst){
				return $this->db->insert('peserta',$pst);
			}

		public function getpst($no_peserta){
			$query = $this->db->get_where('peserta', array('no_peserta' => $no_peserta));
			return $query->row_array();
		}

		public function updatepst($pst, $no_peserta){
			$this->db->where('peserta.no_peserta', $no_peserta);
			return $this->db->update('peserta', $pst);
		}

		public function delpst($no_peserta){
			return $this->db->where('no_peserta', $no_peserta)->delete('peserta');
		}
		
	}
?>