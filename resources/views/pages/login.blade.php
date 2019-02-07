@extends('layouts.default')
@section('content_head')
<link href="{{ asset('css/style3.css')}}" rel="stylesheet">
@stop
@section('content')

<div class="container">
        <div class="card card-container">
            

            <img id="profile-img" class="profile-img-card" src="{{asset('imagenes/bgcolor.jpg')}}">

            <p id="profile-name" class="profile-name-card"></p>
	    @if(Session::has('mensaje_error'))
                {{ Session::get('mensaje_error') }}
            @endif
            {{ Form::open(array('url' => '/login')) }}
                {{ Form::label('usuario', 'Usuario') }}
            	{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
                {{ Form::label('contraseña', 'Contraseña') }}
            	{{ Form::password('password', array('class' => 'form-control') ) }}
                <div id="remember" class="checkbox">
                    {{ Form::label('lblRememberme', 'No cerrar sesión') }}
            	    {{ Form::checkbox('remember', true) }}
                </div>
		 <div align="center">
                    {{ Form::submit('Ingresar') }}
		</div>
            {{ Form::close() }}
            <p> ¿Eres nuevo?<a href="#" class="forgot-password">
                Regístrate
            </a></p>
        </div><!-- /card-container -->
    </div><!-- /container -->

@stop
@section('content_js')
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@stop
