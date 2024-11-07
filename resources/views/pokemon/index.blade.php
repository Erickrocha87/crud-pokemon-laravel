@foreach($pokemon as $pokemon)
    <div>
        <h3>{{ $pokemon->name }}</h3>
        <p>{{ $pokemon->type }}</p>
        <p>{{ $pokemon->power_points }}</p>
        <a href="{{ url('pokemon/'.$pokemon->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach