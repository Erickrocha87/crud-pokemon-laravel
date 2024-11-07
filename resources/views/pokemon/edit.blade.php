<form action="{{ url('pokemon/'. $pokemon->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value= "{{$pokemon->name}}" required>
    <input type="text" name="type" placeholder="Type" value= "{{$pokemon->type}}" required>
    <input type="number" name="power_points" placeholder="Power_points" value= "{{$pokemon->power_points}}" required>
    <button type="submit">update Pokemon</button>
</form>