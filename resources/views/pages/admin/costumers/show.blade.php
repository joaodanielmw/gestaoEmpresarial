@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <a href="{{ url('/admin/clientes') }}" class="btn btn-outline-secondary">
            Voltar
        </a>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="https://placehold.co/150x150" class="rounded-circle mb-3" alt="Maria Santos" width="150" height="150">
                        <h2 class="fw-bold">Maria Santos</h2>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Email</h6>
                            <p class="mb-0">maria.santos@email.com</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Telefone</h6>
                            <p class="mb-0">(11) 99999-8888</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">CPF</h6>
                            <p class="mb-0">123.456.789-00</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Data de Nascimento</h6>
                            <p class="mb-0">15/03/1985</p>
                        </div>
                        
                        <div class="col-12 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Endereço</h6>
                            <p class="mb-0">Rua das Flores, 123 - Centro<br>São Paulo, SP - 01234-567</p>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-uppercase text-muted mb-1">Cliente desde</h6>
                            <p class="mb-0">Janeiro de 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection