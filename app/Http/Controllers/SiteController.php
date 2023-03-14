<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }

    public function filtro(Request $request)
    {
        $categoriaSelecionada = Categoria::where('categoria', $request['categorias'])->first();
        $produtos = [];
        if (isset($categoriaSelecionada))
            $produtos = Produto::where('categoria_id', $categoriaSelecionada->id)->get();
        else
            $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias', 'categoriaSelecionada'));
    }

    public function buscar(Request $request)
    {
        $produtos = Produto::where('nome', 'LIKE', "%{$request['search']}%")->get();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }

    public function comprar(Request $request, $id)
    {
        $produto = Produto::find($id);
        $quantidade = $request->quantidade;

        if ($produto->quantidade >= $quantidade && $quantidade > 0) {
            $produto->quantidade -= $quantidade;
            $produto->save();
            return redirect()->back()->with('success', 'Produto comprado!');
        } else if ($quantidade <= 0) {
            return redirect()->back()->with('error', 'Valor inválido!');
        } else {
            return redirect()->back()->with('error', 'Produto indisponível!');
        }
    }
}
