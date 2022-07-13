<!doctype html>
<html>
<head>
   @include('layout.head')
</head>
<body>
<div class="container">
   <header class="row">
       @include('layout.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('layout.footer')
   </footer>
</div>
</body>
</html>