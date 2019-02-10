<!DOCTYPE html>
<html>
<head>
    <title>MIRAI</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('welcome') }}">Atras</a>
    </div>
</nav>

<h1>Todas los Clientes</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>CI</td>
            <td>Nombre</td>
            <td>Profesion</td>
            <td>Telefono</td>
            <td>Edad</td>
	    <td>Nombre de la Empresa o Institución</td>
	    <td>Correo</td>
        </tr>
    </thead>
    <tbody id="clientes">
    
    </tbody>
</table>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{URL::asset('js/funcCliente.js')}}"></script>
</body>
</html>
