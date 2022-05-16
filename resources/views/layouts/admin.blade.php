<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>TotoFinance</title>
  <link rel="icon" type="image/x-icon" href="Cattura.ico">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="row justify-content-between">
            <div class="col-2">
                <nav id='sidebarMenu' class='bg-light sidebar me-5'>
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light border border-success rounded-3" style="position: fixed; height: 100%">
                      <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="{{ url('/') }}"><img src="{{ asset('img/Cattura.png') }}" alt="logo" class="" style="width: 150px"></a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ url('/') }}" class="nav-link text-success" aria-current="page"><i class="fas fa-home" style="color:hsl(143, 95%, 22%)"></i>Home</a>
                        </li>
                        <li>
                          <a href="{{ route('transactions.index') }}" class="nav-link text-success"><i class="fas fa-money-bill" style="color:hsl(143, 95%, 22%)"></i>LE MIE TRANSAZIONI</a>
                        </li>
                        <li>
                          <a href="{{ route('transactions.create') }}" class="nav-link text-success"><i class="fas fa-plus" style="color:hsl(143, 95%, 22%)"></i>AGGIUNGI TRANSAZIONE</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            <div class="col-9 mt-5">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>