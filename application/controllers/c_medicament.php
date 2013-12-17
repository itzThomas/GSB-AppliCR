<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_medicament extends CI_Controller {

	public function index()

	{
		 
		$data['titre'] = 'Liste medicament';
		$data['access'] = $this->config->item('dossier_access');
		 
		 
		//chargement du modele et de la page de connxion
		 $this->load->view('v_header',$data);
		$this->load->view('v_medicament',$data);
		 
	}
	public function affichage(){
		$this->load->library('session');
		$data['titre'] = 'Sommaire';
		$data['access'] = $this->config->item('dossier_access');
	
	
		// Chargement de la bibliothèque
		$this->load->model('m_medicament');
		$this->load->library('form_validation');
	}
}
	?>