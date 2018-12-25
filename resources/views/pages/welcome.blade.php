<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File uploads</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
	  * {
	    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
	        "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
	        "Segoe UI Emoji", "Segoe UI Symbol";
	  }
	</style>
    </head>
    <body>
<!--/*
	<form action="/procesandoimagen" enctype="multipart/form-data" method="POST">
	   {{csrf_field()}}
	   <input type="file" name="photo" id="photo">
	   <button>Subir</button>
	</form>*/-->
        <form action="{{URL::to('/')}}"  method="POST">
	   {{csrf_field()}}
	   <div class="form-group">
		<label for"nombre">Nombre</label>
	   	<input class="form-control" type="text" name="nombre" id="nombre" placeholder="ingrese un nombre">
	   </div>
	   <div class="form-group">
		<label for="apellido">Apellido</label>
		<input class="form-control" type="text" name="apellido" id="apellido" placeholder="ingrese un apelldido">
           </div>
	   <div class="form-group">
                <label for="correo">Correo</label>
                <input class="form-control" type="email" name="email" id="apellido" placeholder="Igngrese correo">
           </div>
	   <button type="submit" class="btn btn-primary" name="button">Registrar</button>
	</form>
    </body>
</html>
