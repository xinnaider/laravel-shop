<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Http\Services\Carrinho as CarrinhoService;
class Carrinho extends Component
{
    public $produtos;
    protected $carrinhoService;

    protected $listeners = ['adicionarAoCarrinho', 'removerDoCarrinho', 'removerDoCarrinhoUm'];

    public function __construct()
    {
        $this->carrinhoService = app(CarrinhoService::class);
    }

    public function mount()
    {
        $this->atualizarCarrinho();
    }


    public function adicionarAoCarrinho(int $produto_id)
    {
        $this->carrinhoService->adicionar($produto_id);

        $this->atualizarCarrinho();
    }

    public function removerDoCarrinho(int $produto_id)
    {
        $this->carrinhoService->remover($produto_id);

        $this->atualizarCarrinho();
    }

    public function removerDoCarrinhoUm(int $produto_id)
    {
        $this->carrinhoService->removerUm($produto_id);

        $this->atualizarCarrinho();
    }

    public function render()
    {
        return view('livewire.components.carrinho', ['produtos' => $this->produtos]);
    }

    protected function atualizarCarrinho()
    {
        $this->produtos = $this->carrinhoService->visualizar(model: true);
    }
}
