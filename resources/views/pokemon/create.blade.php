@extends('layouts.app')

@section('title', 'Novo Pokemon')
@section('content')

<div class="bg-[url('http://localhost:8000/img/pokemon-halloween4.jpg')] bg-cover bg-center h-screen w-screen flex items-center justify-center">

  <div class="flex justify-center mb-4 relative z-10 bottom-60 left-52 "><img src="http://localhost:8000/img/pokebolaper.png" alt="Logo" class="w-44 h-44"></div>

  <form class="w-80 h-2/4 relative right-10 top-4 bottom-14 bg-shadow-md rounded px-12 pt-12 pb-20 mb-4 bg-cover bg-[url('http://localhost:8000/img/bg-1.jpeg')]" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">



    <div class="mb-8">
      <label class="block text-gray-300 text-xl font-bold mb-6 flex items-center justify-center" for="name">
        Make a pokémon
      </label>
      @csrf
      <input class="w-56 hover:bg-gray-300 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Name" required>
    </div>


    <div class="mb-8">
      <label class="block text-indigo-300 text-sm font-bold mb-2" for="type">

      </label>
      <input class="w-56 hover:bg-gray-300 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="type" placeholder="Type" required>
    </div>



    <div class="mb-8">
      <label class="block text-indigo-300 text-sm font-bold mb-5" for="power_points">

      </label>
      <input class="w-56 hover:bg-gray-300 shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="number" name="power_points" placeholder="Power_points" required>
    </div>

    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Owner">
        Pokémon Owner
      </label>
      <select class="block text-gray-700 text-sm font-bold mb-2" name="owner_id">
        @forelse ($owners as $owner)
        <option value="{{$owner->id}}">{{$owner->name}}</option>
        @empty
        <option disabled>Nenhum owner cadastrado</option>
        @endforelse
      </select>
    </div>
    <div class="mb-8">
      <label class="block text-indigo-300 text-sm font-bold mb-5" for="image">

      </label>
      <input class="w-56 mx-auto hover:bg-gray-300 shadow appearance-none border rounded py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none mb-20 focus:shadow-outline" type="file" name="image" id="image" required>
    </div>


    <div class="flex items-center justify-center ">
      <button class="bg-violet-700 hover:bg-violet-900 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline focus:ring focus:ring-violet-300 active:bg-violet-700" type="submit">
        Create Pokémon
      </button>
    </div>

    <div class="flex items-center justify-center">
      <a href="{{ url('pokemon/') }}" class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-6 rounded mt-3 focus:outline-none focus:shadow-outline focus:ring focus:ring-purple-300 active:bg-purple-700">
        See your Pokémon
      </a>
    </div>


  </form>
  <p class="text-center text-gray-500 text-xs">

  </p>
</div>
</div>
</div>
@endsection