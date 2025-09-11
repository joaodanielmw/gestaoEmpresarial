@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <a href="{{ url('/admin/dashboard') }}" class="btn btn-outline-secondary">
            Voltar
        </a>
    </div>
    
    <h1 class="text-center mb-5">Gerenciar Produtos</h1>
    
    <div class="row">
        @include('components.product')
    </div>
</div>
@endsection