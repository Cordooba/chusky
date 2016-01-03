<?php

    if( isset($_SESSION['user']) ){

        header("Location: ".$base_url.'/index.php');
        exit();
    }else{

    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">

  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-offset-3 col-lg-5">
          <form action="?login" method="POST" class="form-signin">
              <h2 class="form-signin-heading">Please sign in</h2>

              <input type="text" class="form-control"  name="nombre" value="" placeholder="Usuario" requiered>
              <input type="text" class="form-control" name="email"  value="" placeholder="Email" required autofocus>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
          </div>
      </div>
    </div>

  </body>
</html>
