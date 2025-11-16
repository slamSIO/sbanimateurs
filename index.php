<?php
	//var_dump( $_GET[ 'route' ] ) ;
	//$route = $_GET[ 'route' ] ;
	
	$route = parse_url( $_SERVER[ 'REQUEST_URI' ] , PHP_URL_PATH ) ;

	if( $route == '/' ){
		require "vues/vue-accueil.php" ;
	}
	elseif( $route == '/ra/connexion' ){
		require "vues/vue-connexion.php" ;
	}
	elseif( $route == '/ra/connecter' ){
		require "controleurs/ctrl-connecter-ra.php" ;
	}
	elseif( $route == '/ra/espace' ){ 
		session_start() ;
		require "vues/vue-espace-ra.php" ;
	}
	elseif( $route == '/ra/deconnecter' ){
		session_start() ;
		require "controleurs/ctrl-deconnecter-ra.php" ;
		
	}
	elseif( $route == '/animateurs' ){
		session_start() ;
		require "controleurs/ctrl-consulter-animateurs.php" ;
	}
	else {
		var_dump( $route ) ;
	}
?>
