<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProdutoRequest;
use App\Http\Requests\StoreProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{
    private $produto;
    private $categoria;

    public function __construct(Produto $livro, Categoria $categoriasLivros)
    {
        $this->produto = $livro;
        $this->categoria = $categoriasLivros;
    }

    public function index()
    {
        $produtos = $this->produto->all();
        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        $categorias = $this->categoria->all();
        return view('produto.crud', compact('categorias'));
    }

    public function store(StoreProdutoRequest $request)
    {
        $data = $request->all();
        $data['imagem'] = '' . $request->file('imagem')->store('produtos', 'public');
        $this->produto->create($data);
        return redirect()->route('produto.index')->with('success', 'Livro criado com sucesso!');
    }

    public function show($id)
    {
        $produto = $this->produto->find($id);
        $produto->load('categoria');
        return response()->json($produto);
    }

    public function edit($id)
    {
        $produto = $this->produto->find($id);
        $categorias = $this->categoria->all();
        return view('produto.crud', compact('categorias', 'produto'));
    }

    public function update(UpdateProdutoRequest $request, $id)
    {
        $data = $request->all();
        $produto = $this->produto->find($id);
        if ($request->hasFile('imagem')) {
            storage::disk('public')->delete(substr($produto->imagem, 9));
            $data['imagem'] = '' .  $request->file('imagem')->store('produtos', 'public');
        }
        $produto->update($data);
        return redirect()->route('produto.index')->with('success', 'Livro editado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        Storage::disk('public')->delete(str_replace('/storage/', '', $produto->imagem));
        $produto->delete();
        return redirect()->route('produto.index')->with('success', 'Livro deletado com sucesso!');
    }
}
