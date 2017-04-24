<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>On s'fait un film</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset("/apple-touch-icon.png") }}>
    <link rel="icon" type="image/png" href={{ asset("/favicon-32x32.png") }} sizes="32x32">
    <link rel="icon" type="image/png" href={{ asset("/favicon-16x16.png") }} sizes="16x16">
    <link rel="manifest" href={{ asset("/manifest.json") }}>
    <link rel="mask-icon" href={{ asset("/safari-pinned-tab.svg") }} color="#292929">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href={{ asset("/css/stylesheet_boostrap.css") }} rel="stylesheet">
    <link href={{ asset("/css/stylesheet_complement.css") }} rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="background-svg">
        <header>
            <div id="app">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">

                            <!-- Collapsed Hamburger -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Branding Image -->
                            <a class="navbar-brand" href="{{ url('/') }}">
                                On s'fait un film...
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/news') }}">News</a></li>
                                <li><a href="{{ url('/members') }}">Membres</a></li>
                                @if(Request::path() !== '/' && Request::path() !== 'search')
                                    <li><a href="{{ url('/search') }}">Je me trouve un film</a></li>
                                @endif
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Se connecter</a></li>
                                    <li><a href="{{ url('/register') }}">S'enregistrer</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->pseudo }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/home') }}">Accueil profil</a>
                                                <a href="{{ url('/mymovies') }}">Ma collection</a>
                                                <a href="{{ url('/edit') }}">Editer mon profil</a>
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Se déconnecter
                                                </a>
                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
        </header>
        <main>
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </main>
        @if(Request::path() !== 'register' && Request::path() !== 'login' && Request::path() !== 'password/reset')
            <footer>
                <section>
                    <div class="container">
                        <div class="row text-center col-xs-12">
                            <p>OFF c'est le site pour se trouver un film différemment, avec des critères originaux ! Clique sur le shaker pour faire toi-même ton mix et trouver le film qui te convient.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <p>Vos avis sur le site :</p>
                    <div class="container">
                        <div class="row text-center col-xs-12">
                            {!! randomReview() !!}
                        </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row text-center col-xs-10 col-xs-offset-1">
                            <p>Ceci est mon travail de fin d'étude en integration/développement web</p>
                            <a href="mailto:aujourdhui.cest.off@gmail.com">Me contacter !</a>
                        </div>
                    </div>
                </section>
            </footer>
        @endif
    </div>

    <!-- Scripts -->
    <script src={{ asset("/js/app.js") }}></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src={{ asset("/js/script.js") }}></script>
</body>
</html>
