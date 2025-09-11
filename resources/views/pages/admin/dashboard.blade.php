@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center">
        <div class="mb-5">
            <img src="https://placehold.co/150x150" class="rounded-circle mb-3" alt="Admin Photo" width="150" height="150">
            <h3 class="fw-bold">Administrador</h3>
            <p class="text-muted">Painel de Controle</p>
        </div>
        
        <div class="row justify-content-center g-4">
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/admin/clientes') }}" class="btn btn-primary btn-lg w-100 py-4">
                    Gerenciar Clientes
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/admin/produtos') }}" class="btn btn-primary btn-lg w-100 py-4">
                    Gerenciar Produtos
                </a>
            </div>
        </div>
    </div>
</div>
@endsection