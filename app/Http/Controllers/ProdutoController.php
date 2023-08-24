<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];

        //Buscar todos os produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);
    }

    public function categoria($idcategoria = 0, Request $request){
        $data = [];

        $listaCategorias = Categoria::all();

        $queryProduto = Produto::limit(4);

        if($idcategoria != 0){
            //where categoria_id = $idcategoria
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data["idcategoria"] = $idcategoria;
        return view("categoria", $data);
    }

    public function adicionarCarrinho($idproduto = 0, Request $request){
           $prod = Produto::find($idproduto);

           if($prod){
              $carrinho = session('cart', []);
               
              array_push($carrinho, $prod); 
              session(['cart' => $carrinho]);
           }

           return redirect()->route('home');
    }

    public function verCarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];

        return view("carrinho", $data);
    }
}
