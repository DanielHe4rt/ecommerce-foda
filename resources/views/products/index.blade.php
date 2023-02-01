@extends('layouts.app')
@section('title', 'Products')

@section('content')
    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-2 mt-2">Criar Produto</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>#</td>
                <td>Nome</td>
                <td>Categoria</td>
                <td>Preço</td>
                <td>Em Estoque</td>
                <td>Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>R$ {{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td class="d-flex ">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning ">Editar</a>
                        <form method="POST" action="{{ route('products.delete', $product) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
