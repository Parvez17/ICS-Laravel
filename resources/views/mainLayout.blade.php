<!DOCTYPE html>
<html lang="en">
 <head>
   @include('static.head')
 </head>
 <body class="container">
@include('static.header')
@include('static.nav-script')
@include('static.nav')
@yield('content')

@include('static.footer-script')
@include('static.footer')

 </body>
</html>
