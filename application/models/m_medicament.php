<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_medicament extends CI_Model{

	function recupInfo(){
		$reponse = ("SELECT * FROM medicament WHERE MED_NOMCOMMERCIAL='' ");
		$query = $this->db->query($reponse);
		return $query->result_array();
	}
	
}

?>