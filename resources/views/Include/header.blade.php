<!DOCTYPE html>
<html>
<head> 
  <title>Rio's Library</title>
  <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('/css/cstyle.css')}}">
  <!--<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap1.css')}}">-->
  <script type="text/javascript" src="{{url('/js/jquery.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{url('home')}}">Rio's Library </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}">| Home | <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('create')}}">| Add a Book |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('return')}}">| Return a Book |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('searchview')}}">| Search |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">| About |</a>
      </li>
    </ul>
  </div>
</nav>
</body>
<br><br>