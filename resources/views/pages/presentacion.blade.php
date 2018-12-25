<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>File uploads</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/$
        <style>
          * {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol";
          }
        </style>
    </head>
    <body>
	<h1>Registro</h1>
	<?php foreach($informacion as $info):?>
	<h2 > <?= $info;?></h2>
	<?php endforeach;?>
    </body>
</html>

