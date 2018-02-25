<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Moja Zgrada') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" rel="stylesheet"> -->
</head>
<body>
    <div id="root">
    <section class="hero is-dark is-bold ">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <router-link to="/" class="navbar-item">
            <h1>Moja Zgrada</h1>
          </router-link>
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              Login
            </a>
            <a class="navbar-item">
              Register
            </a>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Moja
      </h1>
      <h2 class="subtitle">
        Zgrada
      </h2>
    </div>
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <router-link tag="li" to="/placanja">
             <a>Racuni</a>  
        </router-link>
          <router-link tag="li" to="/dugovanja">
             <a>Dugovanja</a>     
        </router-link>
          <router-link tag="li" to="/plan">
             <a>Plan ciscenja</a>  
        </router-link>
        <router-link tag="li" to="/stanari">
             <a>Stanari</a>  
        </router-link>
        <router-link tag="li" to="/gazda">
             <a>Gazda</a>  
        </router-link>
        <router-link tag="li" to="/ostalo">
             <a>Ostalo</a>  
        </router-link>
        </ul>
      </div>
    </nav>
  </div>
</section>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
