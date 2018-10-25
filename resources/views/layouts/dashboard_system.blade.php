<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:100,300,400,500,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,500,600,700,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        

        @yield('styles')
    </head>
    <body>
        <div class='container'>
            <div class='row'>
                <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#">Technology Pokedex</a>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fab fa-codepen"></i>  Technology Nodes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/nodes"><i class="fas fa-th-list"></i> Nodes</a>
                                    <a class="dropdown-item" href="/nodes/create"><i class="fas fa-plus"></i> Add Node</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/node-types"><i class="fas fa-th-list"></i> Node Types</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item disabled" href="#"><i class="fas fa-th-list"></i> Node Relations</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item disabled" href="#"><i class="fas fa-th-list"></i> Links</a>
                                </div>
                            </li>                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-code"></i> HTML
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item disabled" href="#"><i class="fas fa-cut"></i> Recortes</a>                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/html"><i class="fas fa-gamepad"></i> Snes Roms</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')
        @yield('javascripts')

        <script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
        
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/underscore-min.js') }}"></script>
        <script src="{{ asset('js/clndr.js') }}"></script>

        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/custom/slickarias.js') }}"></script>
        <script src="{{ asset('js/custom/funcoes.js') }}"></script>
        @yield('jqueries')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>