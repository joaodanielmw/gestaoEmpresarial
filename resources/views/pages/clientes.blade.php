@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="d-flex flex-wrap justify-content-center gap-3">
        @foreach ($clientes as $cliente)
            <x-cardcliente :cliente="$cliente"></x-cardcliente>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">
            + cadastrar cliente
        </a>
    </div>
</div>
@endsection
