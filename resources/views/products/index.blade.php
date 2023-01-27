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
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Item</td>
        <td>Ação</td>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>R$ {{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <button class="btn btn-primary">Apagar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
