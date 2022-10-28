<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="hijo">
        <h1>Iniciar Sesion</h1>
        <form method="POST" action="/login">
            @csrf
            <input class="bonger" name="nombre" type="text" placeholder="inserte su nombre"><br>
            <input class="bonger" name="pass" type="password" placeholder="inserte su contraseña"><br>
            <button class="bonger">Ingresar</button>
        </form>
        <a href="/register">Registrar</a>
    </div>
</body>
</html>