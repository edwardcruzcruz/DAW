
<!doctype html>

<html>

<head>

   @include('includes.head')
   @yield('content_head')
</head>

<body>
@include('includes.headerAdmin')

@yield('content')


<footer class="row">

    @include('includes.footer')

</footer>
@yield('content_js')
</body>

</html>
