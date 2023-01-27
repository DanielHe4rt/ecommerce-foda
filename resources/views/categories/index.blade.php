<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="body">
<a href="{{ route('categories.create') }}">Criar nova Categoria</a>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Item</td>
        <td>Ação</td>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <button class="btn btn-primary">Apagar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
<script>
    $(document).ready(function () {
        alert(1)
    });
</script>
</html>
