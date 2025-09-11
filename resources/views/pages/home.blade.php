@extends('layouts.app')

@section('content')
    @include('components.carrousel')
    <div class="container my-5 text-center">
        <a href="{{ url('/produtos') }}" class="btn btn-primary btn-lg px-5">
            Confira Nossos Produtos
        </a>
    </div>
@endsection