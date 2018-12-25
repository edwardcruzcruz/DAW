
<!doctype html>

<html>

<head>

   @include('includes.head')

</head>

<body>
@include('includes.header')

@yield('content')


<footer class="row">

    @include('includes.footer')

</footer>
@yield('content_js')
</body>

</html>
