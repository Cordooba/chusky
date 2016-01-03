<?php 
 
require_once('datos.php');

try{
	$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $usuario, $pass);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES utf8');
}catch(PDOException $e){
	die('Error de conexión a la base de datos: '. $e->getMessage());
}