<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>@yield('title') | Mon Agence</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Agence FranceVLC</a>
      @php
        $route = request()->route()->getName(); 
      @endphp
      <div id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a @class(['nav-link', 'active' => str_contains($route, 'property.')]) href="{{ route('property.index') }}">Estate</a>
          <a @class(['nav-link', 'active' => str_contains($route, 'login')]) href="{{ route('login') }}">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    @yield('content')
  </div>
</body>
</html>