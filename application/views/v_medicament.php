
<div id="page">
	<div id="entete">


		<?php $image_properties = array(
				'src' => ''.$access.'/assets/img/logo.jpg',
				'width' => '150',
				'height' => '150',
				'title' => 'GSB',
				'id' => 'logoGSB',

	);?>
		<?php echo img($image_properties); ?>

	</div>
	<div id="contenu">
		<h1>Medicaments :</h1>
		<?php $this->load->helper('form');?>
		<?php $this->load->helper('html');?>
		<select name="monSelect">
			<?php 
			foreach ($affiche as $valeur) {
?>

			<option value="one"
			<?php echo set_select('nomMedoc',$valeur, TRUE); ?>>
				<?php echo $valeur['MED_NOMCOMMERCIAL']?>
			</option>

			<?php }?>
		</select>

		<?php 

		//Recup valeur array
		//  	foreach ($affiche as $valeur) {
// 	$valeur['MED_NOMCOMMERCIAL'];
//  	}
// 	echo "<pre>".print_r($affiche, true)."</pre>";

// 	echo set_select('nomMedoc',$valeur );



// button submit
	echo form_submit('mysubmit', 'OK');
	?>
		<p>
			<label for="nom">Depot légal :</label>
			<?php 
			foreach ($affiche as $valeur) {
?>

			<option value="two" <?php echo set_select('detail',$valeur ); ?>>
				<?php echo $valeur['MED_DEPOTLEGAL']?>
			</option>

			<?php }?>
			</select>




			<?php // echo form_input();
?>
			</br>
		</p>
		<p>
			<label for="nom">Nom Commercial :</label>

			<?php echo form_input(""); ?>
			</br>

		</p>
		<p>
			<label for="nom">Famille :</label>

			<?php echo form_input(""); ?>
			</br>
		</p>
		<p>
			<label for="nom">Composition :</label>

			<?php echo form_input(""); ?>
			</br>
		</p>
		<p>
			<label for="nom">Effet :</label>

			<?php echo form_input(""); ?>
			</br>
		</p>
		<p>
			<label for="nom">Contre Indic :</label>

			<?php echo form_input(""); ?>
			</br>
		</p>
		<p>
			<label for="nom">Prix echantillon :</label>

			<?php echo form_input(""); ?>
			</br>
		</p>

	</div>
</div>
