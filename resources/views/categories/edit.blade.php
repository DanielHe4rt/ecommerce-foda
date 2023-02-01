@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
    <div class="container">
        <h1>
            Editar Categoria #{{ $category->id }}
        </h1>
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label mt-4">Nome</label>
                <input name="name" value="{{ $category->name }}" type="text" class="form-control" id="name"
                       placeholder="Moletom He4rtless">
            </div>

            <button type="submit" class="btn btn-primary mt-2">
                Editar
            </button>
        </form>
    </div>
@endsection
