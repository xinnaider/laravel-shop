<?php

namespace App\Http\Services;
use App\Models\Produto;

class Carrinho
{
    public function visualizar($model = false)
    {
        $produtosCarrinho = session()->get('carrinho', []);

        if($model){
            $produtos = Produto::find(array_keys($produtosCarrinho));

            $produtosCarrinho = $produtos->map(function($produto) use ($produtosCarrinho){
                $produto->quantidade = $produtosCarrinho[$produto->id];

                return $produto;
            });
        }

        return $produtosCarrinho;
    }

    public function adicionar(int $produto_id)
    {
        $produtosCarrinho = $this->visualizar();

        if(Produto::notHasId($produto_id)){
            return [false, null, 'Produto não encontradol'];
        };

        if(array_key_exists($produto_id, $produtosCarrinho)){
            $produtosCarrinho[$produto_id]++;
        } else {
            $produtosCarrinho[$produto_id] = 1;
        };

        session()->put('carrinho', $produtosCarrinho);

        return [true, null, 'Produto adicionado ao carrinho.'];
    }

    public function remover(int $produto_id)
    {
        $produtosCarrinho = $this->visualizar();

        if(array_key_not_exists($produto_id, $produtosCarrinho)){
            return [false, null, 'Esse produto não está no carrinho.'];
        }

        unset($produtosCarrinho[$produto_id]);

        session()->put('carrinho', $produtosCarrinho);

        return [true, null, 'Produto removido do carrinho.'];
    }

    public function removerUm(int $produto_id)
    {
        $produtosCarrinho = $this->visualizar();

        if(array_key_not_exists($produto_id, $produtosCarrinho)){
            return [false, null, 'Esse produto não está no carrinho.'];
        }

        if($produtosCarrinho[$produto_id] <= 1){
            unset($produtosCarrinho[$produto_id]);
        } else {
            $produtosCarrinho[$produto_id]--;
        }

        session()->put('carrinho', $produtosCarrinho);

        return [true, null, 'Produto removido do carrinho.'];
    }
}
