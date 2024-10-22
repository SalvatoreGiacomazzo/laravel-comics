<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
<header class="d-flex align-items-center justify-content-around text-warning">
    <h1>Pokémon Starters</h1>


    <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand text-warning" href="{{route('/')}}">Primo Stadio</a>
          <a class="navbar-brand text-warning" href="{{ route('page2') }}">Secondo Stadio</a>
          <a class="navbar-brand text-warning" href="{{ route('page3') }}">Terzo Stadio</a>
        </div>

    </nav>
</header>
<main>
<div class="main-content">

@yield('main-content')

</div>


</main>


<footer class="d-flex align-items-center">
    <h1 class="text-center text-warning">Newer Generations yet to come! </h1>
</footer>

</body>
</html>
