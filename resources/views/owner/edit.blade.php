<x-app-layout>
    <div class="bg-[url('http://localhost:8000/img/pokemon-halloween4.jpg')] bg-cover bg-center h-screen w-screen flex items-center justify-center">

        <div class="flex justify-center mb-4 relative z-40 bottom-60 left-52"><img src="http://localhost:8000/img/pokebolaper.png" alt="Logo" class="w-44 h-44"></div>

        <form class="p-2 w-80 relative right-10 top-4 bottom-14  bg-shadow-md rounded px-12 pt-12 pb-20 mb-4 bg-cover bg-[url('http://localhost:8000/img/bg-1.jpeg')]" action="{{ url('owner/'. $owners->id)}}" method="POST">



            <div class="mb-8">
                <label class="block text-gray-300 text-xl font-bold mb-6 flex items-center justify-center" for="name">
                    Edit Owner
                </label>
                @csrf
                @method('PUT')
                <input class="w-56 hover:bg-gray-300 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Name" value="{{$owners->name}}" required>
            </div>

            <div class="mb-8">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Edit Owner Image
                </label>
                <input class="shadow appearance-none border rounded py-2 px-3 w-80 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" value="{{$owners->image}}"
                    </div>

                <div class="mb-8">

                    <div class="flex items-center justify-center ">
                        <button class="bg-violet-700 hover:bg-violet-900 text-gray-300 font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline focus:ring focus:ring-violet-300 active:bg-violet-700" type="submit">
                            Update Owner
                        </button>
                    </div>
        </form>
        <p class="text-center text-gray-500 text-xs">

        </p>
    </div>
    </div>
    </div>
</x-app-layout>