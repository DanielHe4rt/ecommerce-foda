@extends('layouts.app')
@section('title', 'Editar Produtos')
@section('content')
    <div class="container">
        <h1>
            Editar Produto #{{ $product->id }}
        </h1>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label mt-4">Nome</label>
                <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="name" placeholder="Moletom He4rtless">
            </div>
            <div>
                <label for="category_id" class="form-label mt-4">Categoria do Produto</label>
                <select name="category_id" class="form-select" id="category_id">
                    @foreach($categories as $category)
                        <option @selected($product->category_id == $category->id) value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price" class="form-label mt-4">Preço do Produto</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">R$</span>
                    <input name="price" value="{{ $product->price }}" type="number" class="form-control" id="name"
                           placeholder="1500">
                </div>
                <small id="priceHelp" class="form-text text-muted">Utilize números inteiros! 15,00 = 1500</small>
            </div>

            <div class="form-group">
                <label for="stock" class="form-label mt-4">Quantidade em Estoque</label>
                <input name="stock" value="{{ $product->stock }}" type="number" class="form-control" id="stock"
                       placeholder="10">
            </div>

            <button class="btn btn-primary mt-2" type="submit">Atualizar</button>
        </form>
    </div>
@endsection
