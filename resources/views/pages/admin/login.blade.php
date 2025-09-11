@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center my-5">
        <form class="w-100" style="max-width: 400px;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="seuemail@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembre de mim</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
            <div class="mt-3 d-flex justify-content-between">
                <a href="{{ url('/login') }}" class="text-decoration-none">Entrar como usuário</a>
            </div>
        </form>
    </div>
    
@endsection