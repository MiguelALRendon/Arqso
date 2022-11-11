<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="hijo">
        <h1>Editar {{$data->LibroNombre}}</h1>

        <form method="POST" action="/editarL">
            @csrf
            <input type="text" name="id" value="{{$data->LibroId}}" hidden><br>
            <input type="text" name="nombre" value="{{$data->LibroNombre}}" placeholder="Inserte un Nombre"><br>
            <textarea type="text" name="desc" placeholder="Inserte una Descripcion">{{$data->LibroDescripcion}}</textarea><br>
            <input type="text" name="genero" value="{{$data->LibroGenero}}" placeholder="Inserte un genero"><br>
            <button>Guardar</button>
        </form>
    </div>
</body>
</html>