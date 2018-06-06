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
            font-size : 28px;
            margin-left : 10%;
            color : grey;
        }
        
        body {
            font-family: 'Lato';
            width: 100%;
        }
        
        .logoApp{
            float: left;
            margin-top: 0%;
            width : 10%;
        }

        .title {
            border : 2px solid grey; 
        }
        
        .profil {
            float :right;
            margin-right : 5%;
            margin-top : -50px;
            background-color : grey;
        }
        
         .ImageProfil {
            float :right;
            margin-right : 15%;
            margin-top : -50px;
        }
        
        .casegris {
            background-color : grey;
        }
        
        .listeCours {
            margin-left : 20%;
        }
        
        .selectImage {
            margin-left : 20%;
            border : 2px solid grey;
            width : 20%;
            height : 150px;
            
        }
        
        .textselect {
            text-align: center;
        }
        
        .selectionner {
            margin-left : 25%;
            width: 50%;
        }
        
        .button_importer {
            border : 1px solid black;
            background-color : grey;
            width: 100%;
        }
        .titleListeStudent{
            text-align: center;
        }
        
        .liststudents {
            float : right;
            margin-right : 20%;
            margin-top: -195px;
            width: 20%;
        }
        
        .button {
            border : 1px solid black;
            background-color : grey; 
        }
    </style>
</head>
<body id="app-layout">


    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
