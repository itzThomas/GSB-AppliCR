

<?php   
echo link_tag (''.$access.'/assets/css/styles.css');


$image_properties = array(
		'src' => ''.$access.'/assets/img/logo.jpg',
		'width' => '150',
		'height' => '150',
		'title' => 'GSB',
		'id' => 'logoGSB',
  
	);?>
<div id="page">
	<div id="entete">
		<?php echo img($image_properties); ?>
		<h1>Suivi du remboursement des frais</h1>


	</div>


	<div id="contenu">
      <h2 >Identification utilisateur</h2>
      <h3 style="color: red"> Login ou mot de passe incorrect </h3>




		<?php echo form_open('c_connexion/connexion');
		echo form_error();
		?>

		<p>
			<?php echo validation_errors(); echo form_open('c_connexion/connexion');?>

			<label for="nom">Login*</label>

			<?php echo form_input("login"," Votre login"); ?>
			</br>
		</p>
		<p>
			<label for="mdp">Mot de passe*</label>

			<?php echo form_password("mdp")?>
			</br>
		</p>
		<?php echo form_submit("connexion","connexion"); 
		echo  form_reset("effacer","Effacer");
		echo form_close();
		?>

	</div>
