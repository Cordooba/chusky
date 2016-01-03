<?php
require_once '../info.php';

session_start();

    if( isset($_GET['login']) ){

        if( $_POST['nombre'] == 'javi' && $_POST['email'] == 'jaanga' ){
            $nombre = $_POST['nombre'];

            echo "retryfuyf";

            // Se crean los datos en el array $_SESSION
            $_SESSION['user'] = $nombre;

            // Se redirige a la página welcome
            header('Location: '.$base_url.'/index.php');
        }else{
            echo 'Datos incorrectos';
        }
        exit();
    }else{
        require_once 'login.html.php';
    }