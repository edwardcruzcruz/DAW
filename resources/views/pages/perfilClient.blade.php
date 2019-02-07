@extends('layouts.defaultClient')
@section('content_head')
<link href="{{ asset('css/style5.css')}}" rel="stylesheet">
@stop
@section('content')
<div id="cuerpo" class="container bootstrap snippet">
            
            <div class="row">
                
                <div  id="menulado" class="col-sm-3"><!--left col-->
                    <br>
                    
                    <div class="row">
                        <div id="user" class="col-sm-3"><h1>{{ Session::get('usuario.0.Nombre','No existe sesion') }}</h1></div>
                        <img id="profile-img" class="profile-img-card" src="./imagenes/bgcolor.jpg">
                                
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ URL::to('editar/'. Session::get('usuario.0.id') ) }}" class="btn btn-danger btn-block btn-compose-email">Editar Perfil</a>
                            <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                                <li class="active col-12">
                                    <a href="#mail-inbox.html">
                                        <i class="fa fa-inbox"></i> Proyectos Pendientes  <span class="label pull-right">7</span>
                                    </a>
                                </li>
                                <li class="col-12">
                                    <a><i class="fa fa-envelope-o"></i> Enviar correo</a>
                                </li>
                            </ul><!-- /.nav -->
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="row">
                        
                                
                        <br>
                                
                                
                        <div class="panel panel-default col-12 ">
                            <div class="panel-heading col-12">Website</div>
                            <div class="panel-body col-12"><a href="http://google.com">google.com</a></div>
                        </div>
                                
                        <br>
                                
                        <div class="col-12">
                            <ul class="list-group">
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Proyectos</strong></span> 12</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                            </ul>
                        </div>
                        <br>
                                
                        <div class="panel panel-default col-12">
                            <div class="panel-heading col-12">Social Media</div>
                            <div class="panel-heading social col-12">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-3-->
                                
                                                
                <div class="col-sm-9">

                    <div class="panel panel-default">
                        <div class="panel-heading resume-heading">
                            
                            
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="col-xs-12 col-sm-8">
                                       <ul class="list-group">
                                          <li class="list-group-item">{{ Session::get('usuario.0.Nombre','No existe sesion') }}</li>
                                          <li class="list-group-item">{{ Session::get('usuario.0.Profesion','No existe sesion') }}</li>
                                          <li class="list-group-item">{{ Session::get('usuario.0.NombreEmpresa','No existe sesion') }} </li>
                                          <li class="list-group-item"><i class="fa fa-phone"></i>{{ Session::get('usuario.0.Telefono','No existe sesion') }} </li>
                                          <li class="list-group-item"><i class="fa fa-envelope"></i>{{ Session::get('usuario.0.Correo','No existe sesion') }}</li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                       <div class="panel-heading bs-callout bs-callout-danger">
                          <h4>Resumen</h4>
                          <p>
                             Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                             te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                          </p>
                       </div>
                       <div class="bs-callout bs-callout-danger">
                          <h4>Temas de Interes</h4>
                          <p>
                             Software Engineering, Machine Learning, Image Processing,
                             Computer Vision, Artificial Neural Networks, Data Science,
                             Evolutionary Algorithms.
                          </p>
                       </div>
                       <div class="bs-callout bs-callout-danger">
                          <h4>Experiencia</h4>
                          <ul class="list-group">
                             <a class="list-group-item inactive-link" href="#">
                                <h4 class="list-group-item-heading">
                                   Software Engineer at Twitter
                                </h4>
                                <p class="list-group-item-text">
                                   Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                                   te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                                </p>
                             </a>
                             <a class="list-group-item inactive-link" href="#">
                                <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>
                                <p class="list-group-item-text">
                                   Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                                   Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                                   nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                                </p>
                                
                             </a>
                          </ul>
                       </div>
                       
                       <div class="bs-callout bs-callout-danger">
                          <h4>Lenguajes y plataformas</h4>
                          <ul class="list-group">
                             <a class="list-group-item inactive-link" href="#">
                                <div class="progress">
                                   <div data-placement="top" style="width: 80%;" 
                                      aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success">
                                      <span class="sr-only">80%</span>
                                      <span class="progress-type">Java/ JavaEE/ Spring Framework </span>
                                   </div>
                                </div>
                                <div class="progress">
                                   <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                                      <span class="sr-only">70%</span>
                                      <span class="progress-type">PHP/ Lamp Stack</span>
                                   </div>
                                </div>
                                <div class="progress">
                                   <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                                      <span class="sr-only">70%</span>
                                      <span class="progress-type">JavaScript/ NodeJS/ MEAN stack </span>
                                   </div>
                                </div>
                                <div class="progress">
                                   <div data-placement="top" style="width: 65%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-warning">
                                      <span class="sr-only">65%</span>
                                      <span class="progress-type">Python/ Numpy/ Scipy</span>
                                   </div>
                                </div>
                                <div class="progress">
                                   <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                                      <span class="sr-only">60%</span>
                                      <span class="progress-type">C</span>
                                   </div>
                                </div>
                                <div class="progress">
                                   <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
                                      <span class="sr-only">50%</span>
                                      <span class="progress-type">C++</span>
                                   </div>
                                </div>
                                <div class="progress">
                                   <div data-placement="top" style="width: 10%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-danger">
                                      <span class="sr-only">10%</span>
                                      <span class="progress-type">Go</span>
                                   </div>
                                </div>
                                <div class="progress-meter">
                                   <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I suck</span></div>
                                   <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I know little</span></div>
                                   <div style="width: 30%;" class="meter meter-right"><span class="meter-text">I'm a guru</span></div>
                                   <div style="width: 20%;" class="meter meter-right"><span class="meter-text">I''m good</span></div>
                                </div>
                             </a>
                          </ul>
                       </div>
                       <div class="bs-callout bs-callout-danger">
                          <h4>Educacion</h4>
                          <table class="table table-striped table-responsive ">
                             <thead>
                                <tr>
                                   <th>Degree</th>
                                   <th>Graduation Year</th>
                                   <th>CGPA</th>
                                </tr>
                             </thead>
                             <tbody>
                                <tr>
                                   <td>Masters in Computer Science and Engineering</td>
                                   <td>2014</td>
                                   <td> 3.50 </td>
                                </tr>
                                <tr>
                                   <td>BSc. in Computer Science and Engineering</td>
                                   <td>2011</td>
                                   <td> 3.25 </td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                </div>
             </div>
                                
                <!--/col-9-->
         
        
            </div>
        </div>



@stop
@section('content_js')
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@stop
