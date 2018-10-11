<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Learning\Model\Produto;
use Learning\Model\Categoria;
use Validator;
use Learning\Http\Requests\ProdutoRequest;
use Auth;

class ProdutoController extends Controller
{
    public function _construct(){
        if(Auth::guest()) {
            return redirect('/login');
        }
    }

    public function list () {
        // $produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        return view('produto/produto_list', compact('produtos'));
    }

    public function view (Request $request) {
        $produto = Produto::find($id);

        // $produto = DB::select('select * from produtos where id = '.$id);        
        if(!$produto)
            return 'Este produto não existe';

        return view('produto/produto_view', compact('produto'));
    }

    public function destroy (Request $request, $id) {        
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@list');
    }

    public function new() {
        $categorias = Categoria::all();
        return view('produto/produto_new', compact('categorias'));
    }

    public function store (ProdutoRequest $request) {
        // $nome = $request->input('nome');
        // $quantidade = $request->input('quantidade');
        // $valor = $request->input('valor');
        // $descricao = $request->input('descricao');
        // DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array($nome, $quantidade, $valor, $descricao));

        //ou

        // $params = $request->all();
        // $produto = new Produto($params);
        // $produto->save();

        //ou

        // $validator = Validator::make(
        //     ['nome' => $request->input('nome')],
        //     ['nome' => 'required|min:3']
        // );

        // if($validator->fails()){
        //     $msgs = $validator->messages();
            
        //     return redirect('/produtos/new');
        // }

        Produto::create($request->all());
        return redirect('/produtos');
    }
}
