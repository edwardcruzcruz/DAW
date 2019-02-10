<!DOCTYPE html>
<html>
<head>
    <title>MIRAI</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('mostrarProyectos') }}">Atras</a>
    </div>
</nav>

<h1>Proyecto {{$data[0]->Titulo}}</h1>
{{ Form::model($data[0],array($data[0]->id,'method'=>'put')) }}
{{ Form::hidden('proyecto_id', $data[0]->id) }}
                    <div class="form-group">
			  {{ Form::label('Titulo', 'Titulo') }}
        {{ Form::text('Titulo', Input::old('Titulo'), array('class' => 'form-control','id'=>'titulo')) }}
                    </div>

                    <div class="form-group">
                      {{ Form::label('Objetivo', 'Objetivo') }}
        {{ Form::text('Objetivo', Input::old('Objetivo'), array('class' => 'form-control','id'=>'objetivo')) }}
		                          </div>
                    <div class="form-group">
                      {{ Form::label('Descripcion', 'Descripcion') }}
        {{ Form::text('Descripcion', Input::old('Descripcion'), array('class' => 'form-control','id'=>'descripcion')) }}
                    </div>

                    <div class="form-group">
                      {{ Form::label('Categoria', 'Categoria') }}
	{{ Form::select('Categoria', $categorias, Input::old('Categoria'), array('class' => 'form-control','id'=>'categoria')) }}
                    </div>

                    <div class="form-group">

		      {{ Form::label('Fecha', 'Fecha') }}
	{{ Form::date('Fecha', \Carbon\Carbon::now(),array('class' => 'form-control','id'=>'fecha'))}}
                         

                    </div>


                    <div class="form-group"> 
                      {{ Form::label('Materiales', 'Materiales') }}
        {{ Form::text('Materiales', Input::old('Materiales'), array('class' => 'form-control','id'=>'materiales')) }}
                    </div>
		    <div class="form-group"> 
                      {{ Form::label('RutaImagenes', 'Ruta de Imagenes') }}
        {{ Form::text('RutaImagenes', Input::old('RutaImagenes'), array('class' => 'form-control','id'=>'rutaimagenes')) }}
                    </div>
		    <div class="form-group"> 
					{{ Form::label('PorcentajeSkills', 'Porcentaje de Skills') }}
        {{ Form::number('PorcentajeSkills', Input::old('PorcentajeSkills'), array('class' => 'form-control','id'=>'porcentajeskills')) }}
                    </div>
		    <div class="form-group"> 
                      {{ Form::label('PersonasEncargadas', 'Personas encargadas') }}
        {{ Form::text('PersonasEncargadas', Input::old('PersonasEncargadas'), array('class' => 'form-control','id'=>'personasencargadas')) }}
                    </div>

{{ Form::submit('Guardar proyecto', array('class' => 'btn btn-primary','id'=>'enviar')) }}

{{ Form::close() }}
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{URL::asset('js/funcEditarProyecto.js')}}"></script>

</body>
</html>
