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
<header class="d-flex align-items-center text-warning">
    <h1>Pokémon Starters</h1>
</header>
<main>
<div class="main-content">

@yield('main-content')

</div>


</main>


<footer>
    <h1>footer</h1>
</footer>

</body>
</html>
