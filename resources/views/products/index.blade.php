@extends('layouts.app')
@section('title', 'Products')

@section('content')
    <div class="container">
    <table class="table table-striped">
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
    </div>
@endsection
