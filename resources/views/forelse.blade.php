<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Uso del forelse</h1>
    @forelse($opciones as $opcion)
        <li>{{$opcion}}</li>
    @empty
        <p>No hay opciones</p>
    @endforelse
</body>
</html>