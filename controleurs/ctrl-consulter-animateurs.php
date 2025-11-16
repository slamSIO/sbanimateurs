<?php
	
	require "modeles/ModeleSBAnimateurs.php" ;
	
	$animateurs = ModeleSBAnimateurs::getAnimateurs() ;
	
	require "vues/vue-animateurs.php" ;
?>
