<x-app-layout>
    <div class="h-screen w-screen bg-blue-50">

        <h1 class="font-bold text-4xl text-center p-9 bg-blue-50"> Check your <span class="text-red-500 ">Owners</span> list </h1>

        <a href="{{ url('owner/create') }}" class=" font-bold text-2xl relative  flex justify-center text-center bottom-2 hover:text-blue-900"> Make a <span class="text-red-500 ml-1.5 hover:text-red-700">owner</span>!</a>

        @if ($owners->isEmpty())

        <h1 class="text-center text-2xl text-gray-600 mt-8">You don't have any Owner!</h1>

        <div class="relative flex justify-center top-6">
            <img src="{{ asset('img/owner .png') }}" alt="" class=" ">
        </div>

        @else
        <div class="flex grid grid-cols-5 bg-blue-50 p-20">
            @foreach($owners as $entity)

            <div class=" w-96 h-86 mb-4 p-4 bg-white shadow-md rounded">
                <div class="">
                    <img src="{{asset('storage/' . $entity->image)}}" alt="fotinho" class="w-56 h-44">
                </div>
                <p class="text-xl text-center"><span class="text-red-500">Owner </span> #{{$loop->iteration}}</p>

                <p class="mt-3 text-xl text-center p-1.5"> {{ $entity->name }} </p>

                <a href="{{ url('owner/'.$entity->id.'/edit') }}" class="relative top-3 hover:text-blue-500">Edit</a>

                <form action="{{ url('owner/'.$entity->id) }}" method="POST" class="inline-block">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" underline hover:text-red-700 p-4 ml-8 text-red-500 relative top-3 left-24">Delete</button>
                </form>
            </div>

            @endforeach
        </div>
        @endif
    </div>
</x-app-layout>