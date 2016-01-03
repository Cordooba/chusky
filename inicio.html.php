
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CHUSKY</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="style/estilos.css">
</head>
<body>

	<div class="container">
	<div class="enlace">

		<?php if(!isset($_SESSION['user']) ): ?>
			<a class="btn btn-default" href="<?=$base_url?>/login" role="button">login</a>
		<?php else: ?>
			<a class="btn btn-default" href="?logout" role="button">Logout</a>
		<?php endif; ?>	 

	</div>

		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6">
						<h1>Chusky</h1>
					</div>
					
						<form action="?enviar" method="post">
							<div class="form-group">
								<textarea class="form-control" type="mensaje" name="mensaje" value="" cols="30" rows="5" placeholder="Introduzca el texto para	publicar"></textarea>
							</div>
							<div class="alinear">
								<div class="form-group col-lg-10 usuario">
									<input class="form-control" type="text" name="usuario" value="" placeholder="Nombre del usuario">
								</div>
								
								<div class="form-group col-lg-2 publicar">
									<button class="btn btn-info" type="submit">Publicar</button>
								</div>		
							</div>
						</form>

						<div class="form-group">
						<?php foreach($publi as $pb): ?>
							<div class="pb">
								<div><?=$pb['mensaje']?></div>
								<br>
								<div class="botones">
									<div class="boton usuario col-lg-10">
										por:  <?=$pb['name']?>
									</div>
									<?php if(isset($_SESSION['user']) ): ?>
									<div class="boton col-lg-1">
										<form action="?editar" method="post">
											<input type="hidden" name="idtask" value="<?=$pb['id']?>">
											<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-pencil"></i></button>
										</form>
									</div>
									<div class="boton col-lg-1">
										<form action="?borrar" method="post">
											<input type="hidden" name="id" value="<?=$pb['id']?>">
											<button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="glyphicon glyphicon-trash"></i></button>
										</form>
									</div>
									<?php endif; ?>
								</div>
								<br>
							</div>
						<?php endforeach; ?>							
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>