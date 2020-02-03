<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
<style>
    ul.nav a:hover { 
        color: #000000 !important;
        font-weight: bold;
    } 
</style>
</head>
<body class="p-0">
<div class="container-fluid" style="height:100vh">
    <div class="row" style="height:100vh">
        <nav class="col-md-2 bg-white shadow-lg bg-white sidebar-expand-md">
        <div class="sidebar">
            <ul class="nav flex-column">
            <div class="text-center">
                <li class="navbar-brand">
                    <a href="#" class="navbar-brand text-primary"><h1>IMS</h1></a>
                </li>
                <hr>
            </div>
            <li class="nav-item">
                <a class="nav-link text-dark" id="dash" href="adhome">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" id="user" href="users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" id="gall" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" id="sen" href="sensor">Sensors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" id="hist" href="sensorvalues">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" id="map" href="map">Map</a>
            </li><br><br>
            <li>
            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">
            Logout
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                @csrf
            </form></li>
            </ul>
        </div>
        </nav>
        
        <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>