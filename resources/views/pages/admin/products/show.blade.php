@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <a href="{{ url('/admin/produtos') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Voltar
        </a>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="https://placehold.co/300x300" class="img-fluid rounded mb-3" alt="Produto">
                        <h2 class="fw-bold">Produto</h2>
                        <p class="text-muted">Nada - Inexistente</p>
                    </div>
                    
                    <div class="row">                       
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Preço</h6>
                            <p class="mb-0"><strong class="text-success">R$ 99,99</strong></p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Estoque</h6>
                            <p class="mb-0">0 unidades</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Status</h6>
                            <p class="mb-0"><span class="badge bg-danger">Indisponível</span></p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Marca</h6>
                            <p class="mb-0">KichelSoft</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Peso</h6>
                            <p class="mb-0">0g</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Data de Cadastro</h6>
                            <p class="mb-0">01/01/2025</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Vendas Realizadas</h6>
                            <p class="mb-0">0 unidades</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection