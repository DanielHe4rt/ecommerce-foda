@extends('layouts.app')
@section('title', 'Products')

@section('content')
    <div class="container">
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-2 mt-2">Cadastrar Cliente</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Nome</td>
                <td>CPF</td>
                <td>Telefone</td>
                <td>Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->document_id }}</td>
                    <td>R$ {{ $customer->phone_number }}</td>
                    <td class="d-flex ">
                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning ">Editar</a>
                        <form method="POST" action="{{ route('customers.delete', $customer) }}">
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
