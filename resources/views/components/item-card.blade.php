<x-card>
    {{-- TODO: Adicionar imagem --}}
    <div class="flex justify-center items-center mb-3">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" alt="" class="h-40 w-40 mb-2 rounded-lg shadow-lg p-5">
    </div>
    <hr class="my-4">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-bold"> {{ $produto->nome }}</h1>
        <p class="text-sm text-gray-500"> {{ $produto->descricao }} </p>
        <p class="text-2xl font-bold"> {{ $produto->preco }} </p>
        <x-carrinho.carrinho-adicionar :idProduto="$produto->id"/>
    </div>
</x-card>
