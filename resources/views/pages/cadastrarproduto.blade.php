@extends('layouts.app')

@section('content')
    <form class="m-4" method="POST" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="d-grid gap-3 mx-auto col-4">
            <h3 class="text-secondary">Cadastrar Produto</h3>
            
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Produto" required>
            
            <textarea class="form-control" name="descricao" id="descricao" rows="4" placeholder="Descrição do produto" required></textarea>
            
            <input class="form-control" type="number" name="preco" id="preco" step="0.01" min="0" placeholder="Preço (R$)" required>
            
            <div class="mb-3">
                <label for="imagem" class="form-label text-secondary">Imagem do Produto</label>
                <input class="form-control" type="file" name="imagem" id="imagem" accept="image/*" required>
            </div>
            
            <div class="d-md-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-2">Cadastrar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection