@extends('layouts.app')

@section('content')
    <form class="m-4" method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <div class="d-grid gap-3 mx-auto col-4">
            <h3 class="text-secondary">Cadastrar Cliente</h3>
            
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome"required>
            <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" required>
            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" required>

            <input class="form-control" type="text" name="cep" id="cep" placeholder="CEP" maxlength="9" required>
            <input class="form-control" type="text" name="rua" id="rua" placeholder="Rua" required>
            <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" required>
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade" readonly required>
            <input class="form-control" type="text" name="uf" id="uf" placeholder="UF" readonly required>
            
            <div class="d-md-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-2">Cadastrar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection