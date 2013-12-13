
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
	<?php echo form_open('c_medicament/affichage');
		echo form_error();?>


	<div id="contenu">
		<h1>Medicaments :</h1>

		<p>
			<label for="nom">Depot légal :</label>

			<?php echo form_input(""); ?>
			</br>
		</p>
		<p>
			<label for="nom">Nom Commercial :</label>

			<?php echo form_input(""); ?>
			</br>
			
		</p>
		<p>
			<label for="nom">famille :</label>

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