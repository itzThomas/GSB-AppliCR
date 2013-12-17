<div name="haut" style="margin: 2 2 2 2 ;height:6%;"><h1> 

	<?php      	  $image_properties = array(
          'src' => 'images/logo.jpg',
          'alt' => 'Laboratoire Galaxy-Swiss Bourdin',
          'class' => 'logoGSB',
          'width' => '100',
          'height' => '60',
);
       		echo img($image_properties);?> 
       		  Gestion des visites</h1></div>
       		  
       		  
<div name="gauche" style="float:left;width:18%; background-color:white; height:100%;">

<h2>Outils</h2>
<li>
<?php
	// affichagee de bonjour avec le nom de l\'tilisateur connect�
	$this->load->view("v_banniere");
      echo "bonjour ".$this->session->userdata('login');
?>
</li>
<ul><li>Comptes-Rendus</li>
<ul>

<li><?php echo anchor("c_nouveau","Nouveaux");?></li>
<li><?php echo anchor("c_consulter","Consulter");?></li>
</ul>
<!-- les differents lien du menu -->
<li>Consulter</li>
<ul><li><?php echo anchor("c_medicament/médicament","Medicaments");?></li>
<li><?php echo anchor("c_praticien/praticien","Praticiens");?></li>
<li><?php echo anchor("c_visiteur/visiteur","Autres Visiteurs");?></li>
 <li><?php echo anchor("c_connexion/deconnexion", "Se déconnecter"); ?></li>
</ul>
</ul>
</div>

