
<!doctype html>

<html>

<head>

   @include('includes.head')
   @yield('content_head')
</head>

<body>
@include('includes.headerClient')

@yield('content')


<footer class="row">

    @include('includes.footer')

</footer>
@yield('content_js')
</body>

</html>
