<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;

class CategoriaController extends Controller
{
    private $produto;
    private $categoriaDoLivro;

    public function __construct(Categoria $categoriaDoLivro, Produto $produto)
    {
        $this->produto = $produto;
        $this->categoriaDoLivro = $categoriaDoLivro;
    }



    public function index()
    {
        $categorias = $this->categoriaDoLivro->all();
        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        return view('categoria.crud');
    }


    public function store(StoreCategoriaRequest $request)
    {
        $data = $request->all();
        $this->categoriaDoLivro->create($data);
        return redirect()->route('categoria.index')->with('success', 'Categoria de Livro criada com SUCESSO!');
    }

    //Não vai ser usado por agora
    public function show($id)
    {
        $categoria = $this->categoriaDoLivro->find($id);
        return response()->json($categoria);
    }

    public function edit($id)
    {
        $categoria = $this->categoriaDoLivro->find($id);
        return view('categoria.crud', compact('categoria'));
    }

    public function update(UpdateCategoriaRequest $request, $id)
    {
        $data = $request->all();
        $categoria = $this->categoriaDoLivro->find($id);
        $categoria->update($data);
        return redirect()->route('categoria.index')->with('success', 'Categoria de Livro modificada com SUCESSO!');
    }

    public function destroy($id)
    {

        $categoria = $this->categoriaDoLivro->find($id);
        $produtos = $this->produto->where('categoria_id', $id)->whereNotNull('imagem')->get();
        foreach ($produtos as $produto) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $produto->imagem));
        }
        $categoria->delete();
        return redirect()->route('categoria.index')->with('success', 'Categoria de Livro deletada com SUCESSO!');
    }
}
