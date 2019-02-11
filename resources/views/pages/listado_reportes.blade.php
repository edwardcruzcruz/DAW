@extends('layouts.defaultAdmin')
@section('content_head')
<link href="{{ asset('css/style3.css')}}" rel="stylesheet">
@stop
@section('content')


<div class="row col-xl-12  ">
        <div class="col-xl-7 card ">
               <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">REPORTE</h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th>id</th>
                      <th>Nombre</th>
                      <th>Acción</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Reporte de Clientes</td>
                      <td><a href="crear_reporte_porpais/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      
                    
                    </tr>
                   
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            
        </div><!-- /card-container -->
        <div class="col-xl- 7 card card-container">
            	
        	<h2>Detalles Generales</h2>
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <p>Gestionadores de proyectos</p>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Manager</a>
                    </div>
                </div>
            </div>
             @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
        
        </div><!-- /card-container -->
</div><!-- /container -->

@stop
@section('content_js')
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop





