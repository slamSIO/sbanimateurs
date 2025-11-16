<?php

	class ModeleSBAnimateurs {

		private static $connexion = null ;
		
		private function __construct(){
			self::$connexion = new PDO( 'mysql:host=localhost;dbname=sbanimateurs', 'sanayabio', 'azerty' ) ;
		}

		private static function getConnexion(){
			if( self::$connexion == null ){
				new ModeleSBAnimateurs() ;
			}
			return self::$connexion ;
		}

		public static function getResponsableAteliers( $email , $mdp ){
			
			$bd = self::getConnexion() ;
			
			$sql = "select id , nom , prenom from responsable_ateliers where email = :email and mdp = :mdp" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':email' => $email , ':mdp' => $mdp ) ) ;
			$responsable = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			
			return $responsable ;
			
		}
		
		public static function getAnimateurs(){
			
			$bd = self::getConnexion() ;
			
			$sql = "select nom , prenom , email "
				 . "from animateur " ;
				 
			$st = $bd->prepare( $sql ) ;
			
			$st->execute() ;
			
			$animateurs = $st->fetchall( PDO::FETCH_ASSOC ) ;
			
			$st->closeCursor() ;
			
			return $animateurs ;
		
		}
		

	} ;


?>
