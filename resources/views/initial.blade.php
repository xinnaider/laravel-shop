@extends('layout')

@section('content')
  <div class="grid grid-cols-4 gap-10">
    @foreach ($produtos as $produto)
      <x-item-card :produto="$produto" />
    @endforeach
  </div>
@endsection
