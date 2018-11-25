<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Uso del IF</h1>
    @foreach($opciones as $opcion)
        <li>{{$opcion}}</li>
    @endforeach

    @if(count($opciones) === 1)
    <p>Solo hay una opcion</p>
    @elseif(count($opciones) > 1)
    <p>Tienes varias opciones</p>
    @else
    <p>No tienes opciones</p>
    @endif
    
</body>
</html>