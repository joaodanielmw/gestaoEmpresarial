@props(['cliente'])

<div class="card" style="width: 75vw;">
  <div class="card-body">
    <h5 class="card-title">{{ $cliente->nome }} {{ $cliente->sobrenome }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $cliente->cpf }}</h6>
    <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
    <p class="card-text"><strong>Cidade:</strong> {{ $cliente->cidade }}</p>
    <p class="card-text"><strong>UF:</strong> {{ $cliente->uf }}</p>
    <p class="card-text"><strong>Bairro:</strong> {{ $cliente->bairro }}</p>
    <p class="card-text"><strong>Logradouro:</strong> {{ $cliente->rua }}</p>
    <strong></strong>
  </div>
</div>