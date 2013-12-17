<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_medicament extends CI_Model{
		
	
	
	function recupInfo(){
		$reponse = ("SELECT * FROM medicament ");
		$query = $this->db->query($reponse);
		return $query->result();		
	}
	
	function recupNom(){
		$reponse = ("SELECT MED_NOMCOMMERCIAL FROM medicament ");
		$query = $this->db->query($reponse);
		return $query->result_array();
	}
	
}

?>