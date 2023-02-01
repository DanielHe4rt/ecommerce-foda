@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label mt-4">Nome do Cliente</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Daniel Corazon">
            </div>

            <div class="form-group">
                <label for="phone_number" class="form-label mt-4">Telefone</label>
                <input name="phone_number" type="tel" class="form-control" id="phone_number" placeholder="(11) 4002-8922">
            </div>

            <div class="form-group">
                <label for="document_id" class="form-label mt-4">Documento (CPF)</label>
                <input name="document_id" type="text" class="form-control" id="document_id" placeholder="123.123.123-12">
            </div>

            <button class="btn btn-primary mt-2" type="submit">Cadastrar</button>
        </form>
    </div>
@endsection
