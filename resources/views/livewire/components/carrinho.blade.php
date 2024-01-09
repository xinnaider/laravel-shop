<div x-data="{ isOpen: false }">
  <button @click="isOpen = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg h-10">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
    </svg>
  </button>

  <div x-show="isOpen" @click.away="isOpen = false"
    class="fixed inset-0 flex items-center justify-end bg-black bg-opacity-50 z-50">
    <div class="bg-white p-4 absolute right-0 top-0 h-full w-1/3">
      <button @click="isOpen = false" class="border-2 border-gray-500 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
      </button>

      <hr class="mt-3 mb-6">

      @foreach ($produtos as $produto)
        <div class="min-w-full h-28 bg-neutral-200 rounded-lg flex items-center p-3 my-3">
          <div class="bg-white rounded-lg h-30 w-30 mr-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png"
              alt="" class="h-20 w-20 p-4">
          </div>
          <div>
            <h1 class="text-2xl font-bold"> {{ $produto->nome }} </h1>
            <p class="text-sm text-gray-500"> {{ $produto->descricao }} </p>
            <p class="text-sm font-bold"> {{ $produto->preco }} </p>
          </div>
          <div class="flex items-center ml-auto">
            <x-carrinho.carrinho-remover-um :idProduto="$produto->id" />
            <p class="text-sm font-bold mx-2"> {{ $produto->quantidade }} </p>
            <x-carrinho.carrinho-adicionar-um :idProduto="$produto->id" />
            <x-carrinho.carrinho-remover :idProduto="$produto->id" />
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
