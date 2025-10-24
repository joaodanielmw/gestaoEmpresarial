@extends('layouts.app')

@section('content')
<div class="container my-5">

    <h2 class="text-center mb-4">O que deseja fazer?</h2>

    <div class="d-flex flex-column align-items-center gap-3">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-lg w-75">
            Cadastrar Cliente
        </a>

        <a href="{{ route('produtos.create') }}" class="btn btn-success btn-lg w-75">
            Cadastrar Produto
        </a>
    </div>

</div>
@endsection
