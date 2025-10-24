<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        return view('pages.clientes', compact('clientes'));
    }

    public function create(){
        return view('pages.cadastrarcliente');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'cpf' => 'required|string|size:11|unique:clientes,cpf',
            'email' => 'required|email|max:255|unique:clientes,email',
            'cep' => 'required|string|size:9',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|size:2|uppercase'
        ]);

        Cliente::create($validated);
        return redirect()->route('home')->with('success', 'Cliente cadastrado com sucesso!');
    }
}
