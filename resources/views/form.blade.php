<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/contactanos') }}" method="get">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre">

        <label for="apellido">Apellidos</label>
        <input type="text" name="apellido" id="apellido" placeholder="Escriba su apellido">

        <label for="email">Correo</label>
        <input type="email" name="email" id="email" placeholder="Escriba su correo">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>