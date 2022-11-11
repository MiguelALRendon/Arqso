<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <a href="/librosP">Privados</a>
        <a href="/librosA">Publicos</a>
    </header>

    <h1>Libros traidos desde otro equipo</h1>

<br>
<table>
    <header>
        <tr>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Genero</td>
        <td></td>
        <td></td>
        <tr>
    </header>

    @foreach ($data as $libro)
        <tr>
            <td> {{$libro['LibroNombre']}} </td>
            <td> {{$libro['LibroDescripcion']}} </td>
            <td> {{$libro['LibroGenero']}} </td>
            <td><a href=" {{route('editarP', $libro->LibroId)}} ">Editar</a></td>
            <td>
                <form method="POST", action="{{route('borrarP', $libro->LibroId)}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
</body>
</html>