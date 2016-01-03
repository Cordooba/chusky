<?php


require_once('../db/conectar.php'); 

try{

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "CREATE TABLE usuario (

		id 			INT AUTO_INCREMENT PRIMARY KEY,
		pass		VARCHAR(255) NOT NULL,
		email 		varchar(100) NOT NULL,
		createdat	TIMESTAMP DEFAULT CURRENT_TIMESTAMP

	)	DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->exec($sql);
	
	$sql = "CREATE TABLE publicaciones (

		id 			INT AUTO_INCREMENT PRIMARY KEY,
		name 		VARCHAR(255) NOT NULL,
		mensaje		VARCHAR(140) NOT NULL,
		mencreado	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		meneditado	TIMESTAMP NULL DEFAULT NULL


	)	DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se han podido crear las tablas usuario y publcaciones". $e->getMessage());
}