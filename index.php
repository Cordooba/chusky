<?php 

require_once('db/conectar.php');
require_once 'info.php';

session_start();
 
if( isset($_GET['logout']) ){
    
    unset($_SESSION['user']);

    session_destroy();
    
    header("Location: ".$base_url.'/login');
}

if (isset($_GET['enviar'])) {

	try {

	$name = htmlspecialchars($_POST['usuario'],ENT_QUOTES, 'UTF-8');
	$mensaje = htmlspecialchars($_POST['mensaje'],ENT_QUOTES, 'UTF-8');

	$sql = "INSERT INTO publicaciones (name,mensaje) VALUES (:name, :mensaje)";
	$ps = $pdo->prepare($sql);
	$ps->bindValue(':name', $name);
	$ps->bindValue(':mensaje', $mensaje);
	$ps->execute();

	} catch (Exception $e) {
		echo "no se ha podido introducir el mensaje en la base de datos";
	}

	header("Location: .");
	exit();

}

if (isset($_GET['borrar'])) {
	
	$id = htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8');

	$sql = "DELETE FROM publicaciones WHERE id = :id";
	$ps = $pdo->prepare($sql);
	$ps->bindValue(':id', $id);
	$ps->execute();
}

try{
	$sql = 'SELECT * FROM publicaciones ';
	$ps = $pdo->prepare($sql);
	$ps->execute();
}catch(PDOException $e) {
	die("No se ha podido extraer información de la base de datos:". $e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	$publi[] = $row;
}


require_once 'inicio.html.php';
