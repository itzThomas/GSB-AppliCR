    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
			<?php  echo $this->session->userdata('nom')." ".$this->session->userdata('prenom');?>
				  
			</li>
           <li class="smenu">
             <?php   echo anchor ('c_gererFrais','Suivie de Frais');?>
           </li>
           <li class="smenu">
              <?php   echo anchor ('c_etatFrais','Mes fiches de frais');?>
           </li>
 	   <li class="smenu">
              <?php   echo anchor ('c_connexion/deconnexion','Déconnexion');?>
           </li>
         </ul>
        
    </div>
    