@extends('layouts.default')
@section('content_head')
<link href="{{ asset('css/style3.css')}}" rel="stylesheet">
@stop
@section('content')


<div class="container">
        <div class="card card-container">
            	
        	<h2>Cuentanos de tus ideas y nosotros lo haremos posible.</h2>


{{ Form::open(['url' => 'guardar','method'=>'post']) }}
    



                <div class="form-group">
					{{ Form::label('CI', 'Cedula de Identidad') }}
        {{ Form::text('CI', Input::old('CI'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('Nombre', 'Nombre Completo') }}
        {{ Form::text('Nombre', Input::old('Nombre'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('Profesion', 'Profesion') }}
	{{ Form::select('Profesion', array('Docente' => 'Docente', 'Estudiante' => 'Estudiante', 'Empresa pequeña (startups)' => 'Empresa pequeña (startups)', 'Empresa grande (más de 100 empleados)' => 'Empresa grande (más de 100 empleados)','Organización sin fines de lucro' => 'Organización sin fines de lucro','Uso personal'=>'Uso personal'), Input::old('Profesion'), array('class' => 'form-control')) }}
        
				</div>


				<div class="form-group">
					{{ Form::label('Telefono', 'Telefono') }}
        {{ Form::text('Telefono', Input::old('Telefono'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('Edad', 'Edad') }}
        {{ Form::number('Edad', Input::old('Edad'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('NombreEmpresa', 'Nombre Empresa o Institucion') }}
        {{ Form::text('NombreEmpresa', Input::old('NombreEmpresa'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('Correo', 'Correo') }}
	{{Form::text('Correo', Input::old('Correo'), array('class' => 'form-control'))}}
				</div>
				<div class="form-group">
					{{ Form::label('username', 'Nombre de Usuario') }}
	{{Form::text('username', Input::old('username'), array('class' => 'form-control'))}}
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Contraseña') }}
	{{Form::password('password', array('class' => 'form-control'))}}
				</div>
                {{ Form::submit('Registrar Usuario', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
            
        </div><!-- /card-container -->
    </div><!-- /container -->

@stop
@section('content_js')
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop
