@extends('layouts.app')

@section('title', 'Begin')
@section('content')

<div class="bg-[url('http://localhost:8000/img/pokemon-halloween4.jpg')] bg-cover bg-center h-screen w-screen flex items-center justify-center">

  <div class="flex justify-center mb-4 relative z-10 bottom-60 left-52 "><img src="http://localhost:8000/img/pokebolaper.png" alt="Logo" class="w-44 h-44"></div>

  <form class="w-80 h-2/4 relative right-10 top-4 bottom-14 bg-shadow-md rounded px-12 pt-12 pb-20 mb-4 bg-cover bg-[url('http://localhost:8000/img/bg-1.jpeg')]" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">


    @csrf



    <div class="flex items-center justify-center mt-5">
      <a href="{{ url('owner/create') }}" class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-6 rounded mt-3 focus:outline-none focus:shadow-outline focus:ring focus:ring-purple-300 active:bg-purple-700 w-80 h-12">
        <span class="flex justify-center mt-1">Create Owner</span>
      </a>
    </div>
    
    <div class="flex items-center justify-center mt-2">
      <a href="{{ url('pokemon/create') }}" class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-6 rounded mt-3 focus:outline-none focus:shadow-outline focus:ring focus:ring-purple-300 active:bg-purple-700 w-80 h-12">
        <span class="flex justify-center mt-1">Create Pokémon</span>
      </a>
    </div>

    <div class="flex items-center justify-center mt-2">
      <a href="{{ url('owner/edit') }}" class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-6 rounded mt-3 focus:outline-none focus:shadow-outline focus:ring focus:ring-purple-300 active:bg-purple-700 w-80 h-12">
        <span class="flex justify-center mt-1">Edit Owner</span>
      </a>
    </div>

    <div class="flex items-center justify-center mt-2">
      <a href="{{ url('pokemon/edit') }}" class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-6 rounded mt-3 focus:outline-none focus:shadow-outline focus:ring focus:ring-purple-300 active:bg-purple-700 w-80 h-12">
        <span class="flex justify-center mt-1">Edit Pokémon</span>
      </a>
    </div>

    <div class="flex items-center justify-center mt-2">
      <a href="{{ url('pokemon/index') }}" class="bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-6 rounded mt-3 focus:outline-none focus:shadow-outline focus:ring focus:ring-purple-300 active:bg-purple-700 w-80 h-12">
        <span class="flex justify-center mt-1">Pokémon by owner</span>
      </a>
    </div>

  </form>
 
</div>
</div>
</div>
@endsection