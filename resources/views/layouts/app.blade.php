<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        h1{
            font-siwe : 24px;
            margin-left : 100px;
            color : grey;
        }
        
        body {
            font-family: 'Lato';
        }
        
        .logoApp{
            float: left
            margin-top: -50px
        }

        .title {
            border : 2px solid grey; 
        }
        
        .profil {
            float :right;
            margin-right : 50px;
            margin-top : -50px;
            background-color : grey;
        }
        
         .ImageProfil {
            float :right;
            margin-right : 150px;
            margin-top : -50px;
        }
        
        .casegris {
            background-color : grey;
        }
        
        .listeCours {
            margin-left : 100px;
        }
        
        .selectImage {
            margin-left : 100px;
            border : 2px solid grey;
            width : 400px;
            height : 150px;
            
        }
        
        .textselect {
            float : left;
            margin-left : 50px;
        }
        
        .selectionner {
            margin-left : 100px;
        }
        
        .button_importer {
            border : 1px solid black;
            background-color : grey;
            margin-left : 100px;
        }
        
        .liststudents {
            float : right;
            margin-right : 50px;
            margin-top: -200px;
        }
        
        .button {
            border : 1px solid black;
            background-color : grey; 
        }
    </style>
</head>
<body id="app-layout">


<-- barre de menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Liste de tâches</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
