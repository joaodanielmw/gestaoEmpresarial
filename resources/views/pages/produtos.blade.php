@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                @foreach ($produtos as $p)
                    <x-cardproduto :produto="$p"></x-cardproduto>
                @endforeach
                
                <div class="text-center mt-4">
                    <a href="{{ route('produtos.create') }}" class="btn btn-primary">+ cadastrar produto</a>
                </div>
            </div>
        </div>
    </div>
@endsection