@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center my-5">
        <form class="w-100" style="max-width: 400px;">
            <div class="mb-3">
                <label for="exampleInputFirstName" class="form-label">Nome</label>
                <input type="input" class="form-control" id="exampleInputFirstName" placeholder="Pedro">
            </div>
            <div class="mb-3">
                <label for="exampleInputLastName" class="form-label">Sobrenome</label>
                <input type="input" class="form-control" id="exampleInputLastName" placeholder="Souza">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira a senha">
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repita a senha">
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar-se</button>
            <div class="mt-3 d-flex justify-content-between">
                <a href="{{ url('/login') }}" class="text-decoration-none">Já tenho uma conta</a>
            </div>
        </form>
    </div>
@endsection

