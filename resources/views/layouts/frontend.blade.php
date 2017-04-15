<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles  -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('style.css')?>" type="text/css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- jQuery  
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
    
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

               

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Beachfelder.de
                </a>
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="#"><b>You are here: Frontend</b></a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="/admin/">BACKEND</a></li>
                    <li><a href="/">FRONTEND</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="#">nicht eingeloggt</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <b>Rolle: {{ Auth::user()->role }}</b> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
                <div class="col-xs-12"> 
                   <ul class="nav navbar-nav">
                    <li><a href="/">Startseite</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="/beachcourts">Beachcourts</a></li>
                    @if (Auth::guest())
                    @else
                    <li><a href="/profile/{{ Auth::user()->id }}">Profil</a></li>
                    @endif
                </ul>
                 </div> </div>
        </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
