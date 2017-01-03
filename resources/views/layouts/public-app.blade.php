<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Trefoil') }}</title>

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">


    <!-- Scripts -->
    <!-- <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script> -->
</head>

<body>
    <div id="app">
        <section class="hero is-primary">
            <!-- Hero header: will stick at the top -->
            <div class="hero-head">
                <header class="nav">
                    <div class="container">
                        <div class="nav-left">
                            <a class="nav-item" href="http://trefoil.ee"><h3 class="subtitle">Trefoil Spordikool<h3></a>
                        </div>
                        <span class="nav-toggle">
                         <span></span>
                        <span></span>
                        <span></span>
                        </span>
                        <div class="nav-right nav-menu">
                            <span class="nav-item">
                                <a class="button is-primary is-inverted" href="http://www.trefoil.ee">
                                    <span class="icon">
                                        <i class="fa fa-arrow-circle-o-right"></i>
                                    </span>
                                <span>Trefoil veebilehele</span>
                            </a>
                            </span>
                        </div>
                    </div>
                </header>
            </div>

            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">@yield('title')</h1>
                    <h2 class="subtitle">@yield('subtitle')</h2>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="notification is-warning">
                  Palun kontrolli andmed
                </div>
            @endif
            @if (session('status'))
                <div class="notification is-success">
                <h2 class="title">{{ session('status') }}</h2>
                </div>
            @endif
        </section>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ elixir('js/app.js') }}"></script>
</body>

</html>
