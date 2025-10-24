<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('pages.produtos', compact('produtos'));
    }

    public function create()
    {
        return view('pages.cadastrarproduto');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('produtos', 'public');
            $validated['imagem'] = $imagemPath;
        }

        Produto::create($validated);

        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);

        if($produto->imagem && Storage::disk('public')->exists($produto->imagem)){
            Storage::disk('public')->delete($produto->imagem);
        }

        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso');
    }
}