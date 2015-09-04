<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Produto;

class ProdutoController extends Controller
{
    public function getAll()
    {
        $produtos = Produto::all();

        return response()->json($produtos);
    }

    public function getById($id)
    {
        $produto = Produto::find($id);

        return response()->json($produto);
    }

    public function create(Request $request)
    {
        $produto = new Produto;

        $produto->descricao = $request->descricao;
        $produto->marca     = $request->marca;
        $produto->custo     = $request->custo;
        $produto->preco     = $request->preco;

        $produto->save();

        return response()->json($produto);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        $produto->descricao = $request->descricao;
        $produto->marca     = $request->marca;
        $produto->custo     = $request->custo;
        $produto->preco     = $request->preco;

        $produto->save();

        return response()->json($produto);
    }

    public function delete($id)
    {
        $produto = Produto::destroy($id);

        return response()->json($produto);
    }
}
