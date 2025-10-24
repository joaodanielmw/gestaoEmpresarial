@props(['produto'])

<div class="card mb-3" style="max-width: 40vw;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $produto->nome }}</h5>
        <p class="card-text">{{ $produto->descricao }}</p>
        <p class="card-text"><small class="text-body-secondary">R$ {{ $produto->preco }}</small></p>
        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                Excluir
            </button>
        </form>
      </div>
    </div>
  </div>
</div>