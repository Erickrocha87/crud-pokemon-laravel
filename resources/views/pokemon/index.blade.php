@extends('layouts.app')

@section('title', 'Lista Pokémon')

@section('content')

    
    <div class="h-screen w-screen bg-blue-50">

    <h1 class="font-bold text-4xl text-center p-9 bg-blue-50"> Check your <span class="text-red-500">Pokémon</span> list </h1>

    @if ($pokemon->isEmpty())

        <h1 class="text-center text-2xl text-gray-600">You don't have any Pokémon</h1>

        <div class="relative flex justify-center top-12">
            <img src="{{ asset('img/pikachu.png') }}" alt="" class="w-full max-w-4xl  ">
        </div>

    @else
    <div class="flex grid grid-cols-5 bg-blue-50 p-20">
        @foreach($pokemon as $poke)

            <div class=" w-64 h-56 mb-4 p-4 bg-white shadow-md rounded">

                <p class="text-xl text-center p-1.5"> {{ $poke->name }} </p>

                <p>Type:<span class="p-1"> {{ $poke->type }} </span></p>

                <p>Strengh:<span class="p-1"> {{ $poke->power_points }} </span> </p>

                <a href="{{ url('pokemon/'.$poke->id.'/edit') }}" class="relative top-3">Edit</a>

                <form action="{{ url('pokemon/'.$poke->id) }}" method="POST" class="inline-block">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 relative top-3 left-24">Delete</button>
                </form>
            </div>

        @endforeach
    </div>
    @endif
    </div>
@endsection
