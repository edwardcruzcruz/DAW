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

<h1>Todas los Proyectos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Proyecto</td>
            <td>Objetivo</td>
            <td>Descripcion</td>
            <td>Categoria</td>
            <td>Fecha</td>
	    <td>Materiales</td>
	    <td>PorcentajeSkills</td>
            <td>Autores</td>
        </tr>
    </thead>
    <tbody>
    @foreach(Session::get('proyectos') as $proyecto)
        <tr>
            <td>{{ $proyecto->Titulo }}</td>
            <td>{{ $proyecto->Objetivo }}</td>
            <td>{{ $proyecto->Descripcion }}</td>
            <td>{{ $proyecto->Categoria}}</td>
	    <td>{{ $proyecto->Fecha}}</td>
	    <td>{{ $proyecto->Materiales}}</td>
	    <td>{{ $proyecto->PorcentajeSkills}}</td>
	    <td>{{ $proyecto->PersonasEncargadas}}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('delete/' . $proyecto->id) }}">Eliminar esta Pelicula</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('editar/' . $proyecto->id ) }}">Editar esta Pelicula</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
