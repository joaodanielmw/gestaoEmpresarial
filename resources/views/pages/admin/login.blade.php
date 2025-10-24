@extends('layouts.loginpage')

@section('content')
    <form class="m-4" method="POST" action="">
        @csrf
        <div class="d-grid gap-3 mx-auto col-3">
            <h3 class="text-secondary">Login</h3>
            
            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
            <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required>

            <button type="submit" class="btn btn-primary ">Entrar</button>
            
            <div class="text-center mt-2">
                <a href="" class="text-secondary text-decoration-none">
                    Entrar como funcionário
                </a>
            </div>
        </div>
    </form>
@endsection