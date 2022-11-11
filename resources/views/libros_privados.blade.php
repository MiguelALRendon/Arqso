<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <header>
        <a href="/librosP" class="active">Privados</a>
        <a href="/librosA">Publicos</a>
    </header>

    <div class="hijo">
        <h1>Libros locales</h1>

        <h3>Registrar nuevo libro</h3>
        <form method="POST" action="/newbook">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre del libro"><br>
            <textarea name="desc" placeholder="Descripcion del libro"></textarea><br>
            <input type="text" name="genero" placeholder="Genero del libro"><br>
            <button>Guardar</button>
        </form>
    </div>

    <button onclick="alerta()">Pija</button>

    <table>
        <header>
            <tr class="header">
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
            <td><a href=" {{route('editarL', $libro->LibroId)}} ">Editar</a></td>
            <td>
                <form method="POST", action="{{route('borrarL', $libro->LibroId)}}">
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