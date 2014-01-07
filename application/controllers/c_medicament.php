<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_medicament extends CI_Controller {

	public function index()

	{
		 
		$data['titre'] = 'Liste medicament';
		$data['access'] = $this->config->item('dossier_access');
		$this->load->helper('form');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
		//chargement du modele et de la page de connxion
		 $this->load->view('v_header',$data);
		 $this->affichageListe();
		
		 
	}
	private function affichageListe(){
	
		// Chargement de la bibliothèque
		$this->load->model('m_medicament');
		$this->load->library('form_validation');
		$data['affiche'] = $this->m_medicament->recupInfo();
		$data['afficheDonnée'] = $this->m_medicament->recupInfo();
		$this->load->view('v_medicament',$data);
		
	}
}
	?>