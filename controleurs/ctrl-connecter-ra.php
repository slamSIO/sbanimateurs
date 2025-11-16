<?php

	$email = $_POST[ "email" ] ;
	$mdp = $_POST[ "mdp" ] ;
	
	require "modeles/ModeleSBAnimateurs.php" ;
	$client = ModeleSBAnimateurs::getResponsableAteliers( $email , $mdp ) ;
	
	if( $client !== FALSE ){
		session_start() ;
		
		$_SESSION[ "id" ] = $client[ "id" ] ;
		$_SESSION[ "nom" ] = $client[ "nom" ] ; 
		$_SESSION[ "prenom" ] = $client[ "prenom" ] ; 
		
		header( "Location: /ra/espace" );
	}
	else {
		$erreur = 'EMail ou mot de passe incorrect.' ;
		require "vues/vue-connexion.php" ;
	}

?>
