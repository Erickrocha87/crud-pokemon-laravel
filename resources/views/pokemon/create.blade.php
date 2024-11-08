@extends('layouts.app')

@section('title', 'Novo Pokemon')
@section('content')
<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="type" placeholder="Type" required>
    <input type="number" name="power_points" placeholder="Power_points" required>
    <button type="submit">Create Pokemon</button>
</form>
@endsection