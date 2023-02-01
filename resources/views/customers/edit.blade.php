@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edição de Clientes - {{ $customer->name }}</h1>
        <div id="main-info">
            <form action="{{ route('customers.update', $customer) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-label mt-4">Nome do Cliente</label>
                    <input name="name" type="text" value="{{ $customer->name }}" class="form-control" id="name"
                           placeholder="Daniel Corazon">
                </div>

                <div class="form-group">
                    <label for="phone_number" class="form-label mt-4">Telefone</label>
                    <input name="phone_number" type="tel" value="{{ $customer->phone_number }}" class="form-control"
                           id="phone_number" placeholder="(11) 4002-8922">
                </div>

                <div class="form-group">
                    <label for="document_id" class="form-label mt-4">Documento (CPF)</label>
                    <input name="document_id" type="text" value="{{ $customer->document_id }}" class="form-control"
                           id="document_id" placeholder="123.123.123-12">
                </div>

                <button class="btn btn-primary mt-2" type="submit">Atualizar</button>
            </form>
        </div>
        <hr>
        <div id="addresses">
            <h2>Endereços do Cliente</h2>
            <a class="btn btn-primary" href="">Cadastrar Endereço</a>
            <table class="table">
                <thead>
                <tr>
                    <td>Rua</td>
                    <td>Bairro</td>
                    <td>Numero</td>
                    <td>Cidade/Estado</td>
                </tr>
                </thead>
                <tbody>
                @foreach($customer->addresses as $address)
                    <tr>
                        <td>{{ $address->street }}</td>
                        <td>{{ $address->neighborhood }}</td>
                        <td>{{ $address->number }}</td>
                        <td>{{ $address->city  }} / {{ $address->state }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
