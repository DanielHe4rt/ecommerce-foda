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
<h1>Cadastro de Produtos</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome do Produto</label>
        <input id="name" name="name" type="text">
    </div>
    <div>
        <label for="name">Categoria do Produto</label>
        <select id="name" name="name" type="text">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="name">Preço do Produto</label>
        <input id="name" name="name" type="number">
    </div>

    <div>
        <label for="name">Quantidade em Estoque</label>
        <input id="name" name="name" type="number">
    </div>

    <button type="submit">Cadastrar</button>
</form>
</body>
</html>
