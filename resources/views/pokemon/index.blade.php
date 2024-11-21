@extends('layouts.app')

@section('title', 'Lista Pokémon')

@section('content')

    
    <div class="h-screen w-screen bg-blue-50">

    <h1 class="font-bold text-4xl text-center p-9 bg-blue-50"> Check your <span class="text-red-500 ">Pokémon</span> list </h1>

    <a href="{{ url('pokemon/create') }}" class=" font-bold text-2xl relative  flex justify-center text-center bottom-2 hover:text-blue-900"> Make a <span class="text-red-500 ml-1.5 hover:text-red-700">pokémon</span>!</a>

    @if ($pokemon->isEmpty())

        <h1 class="text-center text-2xl text-gray-600 mt-8">You don't have any Pokémon!</h1>

        <div class="relative flex justify-center top-6">
            <img src="{{ asset('img/pikachu.png') }}" alt="" class="w-full max-w-4xl  ">
        </div>

    @else
    <div class="flex grid grid-cols-5 bg-blue-50 p-20">
        @foreach($pokemon as $poke)

            <div class=" w-64 h-56 mb-4 p-4 bg-white shadow-md rounded">
                <div>
                    <img src="{{asset('storage/' . $poke->image)}}" alt="fotinho">
                </div>
                <p class="text-xl text-center"><span class="text-red-500">Pokémon </span> #{{$loop->iteration}}</p>
                
                <p class="mt-3 text-xl text-center p-1.5"> {{ $poke->name }} </p>

                <p class="mt-3">Type:<span class="p-1"> {{ $poke->type }} </span></p>

                <p class="mt-1">Strengh:<span class="p-1"> {{ $poke->power_points }} </span> </p>

                <a href="{{ url('pokemon/'.$poke->id.'/edit') }}" class="relative top-3 hover:text-blue-500">Edit</a>

                <form onsubmit="return confirm('Deseja realmente excluir?')" action="{{ url('pokemon/'.$poke->id) }}" method="POST" class="inline-block">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" underline hover:text-red-700 p-4 ml-8 text-red-500 relative top-3 left-24">Delete</button>
                </form>
            </div>

        @endforeach
    </div>
    @endif
    </div>
@endsection
</div>
    <div class="mb-1" style="position:fixed;bottom:0"">
    {{$pokemon->links()}}
    </div>
</div>
