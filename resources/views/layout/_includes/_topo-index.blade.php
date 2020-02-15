<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/scrollnav.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
</head>
<body>

<!-- Menu -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">PÁGINA INICIAL</a></li>
                <li><a href="#">PROJETO</a></li>
                <li><a href="#">ORGANIZAÇÃO</a></li>
                <li><a href="#">SCRATCH DAY UEA</a></li>
                <li id="inscricao"><a href="#">INSCRIÇÃO</a></li>
            </ul>
        </div>
    </nav>
</div>


<ul class="sidenav" id="mobile-demo">
    <li><a href="#">PÁGINA INICIAL</a></li>
    <li><a href="#">PROJETO</a></li>
    <li><a href="#">ORGANIZAÇÃO</a></li>
    <li><a href="#">SCRATCH DAY UEA</a></li>
    <li id="inscricao"><a href="#">INSCRIÇÃO</a></li>
</ul>
<!------------>