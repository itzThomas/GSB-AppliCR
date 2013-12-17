
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

<?php 
	$tab=array();
	 foreach ($affiche as $item) {?>
	<?php
	$item-> MED_NOMCOMMERCIAL;
	$tab[$item]?>
	 
	<?php }?>
 	<br/>
 	<?php 	echo form_dropdown('nomMedoc', $tab);
	echo "<pre>".print_r($affiche, true)."</pre>";
	
	?>
 





		<p>
			<label for="nom">Depot légal :</label>

			<?php echo form_input(); ?>
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