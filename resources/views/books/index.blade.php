@extends('books.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Books</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Report</a>
            </div>
          
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Nombre</th>
             <th>Descripcion</th>
        </tr>
	    @foreach ($books as $book)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $book->id }}</td>
	        <td>{{ $book->Nombre }}</td>
            <td>{{ $book->Descripcion}}</td>
	    </tr>
	    @endforeach
    </table>


@endsection