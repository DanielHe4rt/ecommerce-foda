@extends('layouts.app')
@section('title', 'Criar Categoria')
@section('content')
    <div class="container">
        <h1>
            Criar Categoria
        </h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label mt-4">Nome</label>
                <input name="name"  type="text" class="form-control" id="name"
                       placeholder="Sapatos">
            </div>

            <button type="submit" class="btn btn-primary mt-2">
                Editar
            </button>
        </form>
    </div>
@endsection
