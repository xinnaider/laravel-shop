<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shop</title>
  @vite('resources/css/app.css')
  @livewireStyles
  @stack('style')
</head>

<body class="bg-neutral-200">
  <div class="min-h-full flex justify-between bg-white px-8">
    <div>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png"
        alt="" class="h-20 w-20 p-4">
    </div>
    <div class="flex justify-center items-center gap-x-5">
      {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg h-10 w-28"> Inicio
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg h-10 w-28"> Sobre nós
      </button> --}}
      <livewire:components.carrinho/>
    </div>
  </div>
  <div class="container mx-auto my-20">
    @yield('content')
  </div>
  <div class="text-center py-4 bg-white font-bold">
    Feito com ❤️ por Fernando
  </div>
  @livewireScripts
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @stack('scripts')
</body>

</html>
