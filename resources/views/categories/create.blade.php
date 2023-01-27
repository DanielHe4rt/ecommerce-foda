<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Criação de Categoria</h2>
<form action="{{ route('categories.index') }}">
    @csrf

    <label for="name">Nome da Categoria</label>
    <input id="name" name="name" type="text">
    </br>
    </br>

    <button type="submit">Registrar Categoria</button>
</form>
</body>
</html>
