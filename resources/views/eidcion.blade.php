<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$libro->nombre}}-Edicion</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="hijo">
        <h1>Editar {{$libro->nombre}}</h1>

        <form method="POST" action="/editarL">
            @csrf
            <input type="text" name="id" value="{{$libro->id}}" hidden><br>
            <input type="text" name="nombre" value="{{$libro->nombre}}" placeholder="Inserte un Nombre"><br>
            <textarea type="text" name="desc" placeholder="Inserte una Descripcion">{{$libro->desc}}</textarea><br>
            <input type="text" name="genero" value="{{$libro->genero}}" placeholder="Inserte un genero"><br>
            <button>Guardar</button>
        </form>
    </div>
</body>
</html>