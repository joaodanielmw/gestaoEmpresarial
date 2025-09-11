
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
            <img src="https://placehold.co/600x400" class="img-fluid rounded shadow" alt="Produto">
        </div>
        
        <div class="col-lg-6 col-md-12">
            <h1 class="display-4 fw-bold mb-3">Nome do Produto</h1>
            
            <div class="mb-4">
                <p class="lead text-muted">
                    Esse é uma página de exemplo, não tem nada para comprar aqui, vá embora.
                </p>
                
                <p class="text-muted">
                    produto indisponivel
                </p>

                <div class="col-md-6 mb-3">
                    <h6 class="fw-bold text-uppercase text-muted mb-1">Preço</h6>
                    <p class="mb-0"><strong class="text-success">R$ 99,99</strong></p>
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-block">
                <button type="button" class="btn btn-primary btn-lg px-5" disabled>
                    <i class="fas fa-shopping-cart me-2"></i>Comprar Agora
                </button>
            </div>
        </div>
    </div>
</div>
@endsection