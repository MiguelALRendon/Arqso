<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="hijo">
        <h1>Registrarse</h1>
        <form method="POST" action="/registrar">
            @csrf
            <input class="bonger" name="nombre" type="text" placeholder="inserte su nombre"><br>
            <input class="bonger"name="pass" type="password" placeholder="inserte su contraseña"><br>
            <button class="bonger">Registrar</button>
        </form>
        <a href="/">Regresar</a>
    </div>
</body>
</html>