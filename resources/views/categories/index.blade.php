@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
    <div class="container">
        <a class="btn btn-primary mt-2 mb-2" href="{{ route('categories.create') }}">Criar nova Categoria</a>
        <table class="table table-striped">
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
                    <td class="d-flex ">
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning ">Editar</a>
                        <form method="POST" action="{{ route('categories.delete', $category) }}">
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
