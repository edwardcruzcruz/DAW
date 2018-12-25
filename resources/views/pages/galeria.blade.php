@extends('layouts.default')
 
@section('content')
	<div class="container-fluid">
			<div class="row text-center ">
				<nav class= "col-12">
				<ul>
					<li class="list-inline-item" >Noticias</li>
					<li class="list-inline-item">Eventos</li>
				</ul>
			</nav>
			</div>
			
	</div>



	<div class="container">
	      	<div class="row justify-content-center mt-5">
		    <div class="col-12 col-md-10 col-lg-8">
		        <form class="card card-sm">
		            <div class="card-body row no-gutters align-items-center">
		                <div class="col-auto">
		                    <i class="fas fa-search h4 text-body"></i>
		                </div>
		                <!--end of col-->
		                <div class="col">
		                    <input id="buscador" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Buscador de noticias">
		                </div>
		                <!--end of col-->
		                <div class="col-auto">
		                    <button class="btn btn-lg btn-success" type="submit">Search</button>
		                </div>
		                <!--end of col-->
		            </div>
		        </form>
		    </div>
		    <!--end of col-->
		</div>
		<div class = "my-4">
			<hr>
			</div>

			<div class="container-fluid">
		<div id="noticias" class="row text-center" >

		</div>
			</div>

	    </div>





		<div class = "my-4">
			<hr>
	</div>
@stop
@section('content_js')
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	  <script src="./js/script.js"></script>
@stop
