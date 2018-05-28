<!DOCTYPE html>
<html>
<link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" 
      crossorigin="anonymous">
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
<link href="/css/blog.css" rel="stylesheet">

</head>
    @if ($flash = session('message'))
        <div id="flash-message" class="alert alert-sucess" role="alert" >{{$flash}}</div>
    @endif
<head>
    <title>My Blog</title>
</head>

@if (Auth::check())
   @include('navbarforregistered')
@else
   @include('navbar')
@endif

<body>
  <div class="container">
    <div class="row">
      @yield('content')
                
      @include('sidebar')
    </div>
  </div>
  
@include('footer')

</body>
</html>