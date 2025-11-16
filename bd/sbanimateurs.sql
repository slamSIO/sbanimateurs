drop database if exists sbanimateurs ;
create database sbanimateurs ;

use sbanimateurs ;

create table responsable_ateliers (

	id int auto_increment not null ,
	nom varchar(100) not null ,
	prenom varchar(100) not null ,
	mdp varchar(100) not null ,
	email varchar( 100 ) not null ,
	primary key(id)
) ;

create table animateur (

	id int auto_increment not null ,
	nom varchar(100) not null ,
	prenom varchar(100) not null ,
	email varchar( 100 ) not null ,
	primary key(id)
	
) ;

insert into responsable_ateliers values
( NULL , 'LAVALLEE' , 'Soren' , 'azerty' , 'soren.lavallee@sb.com') ,
( NULL , 'MONTCLAIR' , 'Elowen' , 'azerty' , 'elowen.montclair@sb.com') ;


insert into animateur values
( NULL , 'BELLAMI' , 'Camista' , 'c.bellami@orange.fr' ) ,
( NULL , 'DUFRESNE' , 'Orion' , 'orion.dufresne@gmail.com' ) ,
( NULL , 'VANDENBERG' , 'Isolde' , 'i.vandenberg@gmail.com' ) ,
( NULL , 'CARAVELLE' , 'Theo' , 'theo.caravelle@gmail.com' ) ,
( NULL , 'LYSANDRE' , 'Maelys' , 'maelys.lysandret@gmail.com' ) ;

