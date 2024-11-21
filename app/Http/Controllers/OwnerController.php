<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pokemon;
use Illuminate\Http\Request;


class OwnerController extends Controller
{
    public function index()
{
    $owners = Owner::all();
    return view('owner.index', compact('owners'));
}

    public function getPokemonByOwner($id)
{
    $owner = Owner::find($id);
    $pokemons = Pokemon::where('owner_id', $id)->all();
    return view('owner.getPokemonByOwner', compact('pokemons', 'owner'));
}

public function create()
{
    return view('owner.create');
}

public function store(Request $request)
{
    
    $image = $request->file("image")->store("images","public");
    $owners = Owner::create([
        "name"=>$request->name,
        "image"=>$image
    ]);
    return redirect('owner')->with('success', 'Owner created successfully.');
}

public function edit($id)
{
    $owners = Owner::findOrFail($id);
    return view('owner.edit', compact('owners'));
}

public function update(Request $request, $id)
{
    $owner = Owner::findOrFail($id);

    if($request->hasFile('image')) {
        $image = $request->file("image")->store("images", "public");
    } else {
        $image = $owner->image;
    }
    $owner = $owner->update([
        "name"=>$request->name,
        "image"=>$image
    ]);
    return redirect('owner')->with('success', 'Owner updated successfully.');
}

public function destroy($id)
{
    $owner = Owner::findOrFail($id);
    $owner->delete();
    return redirect('owner')->with('success', 'Owner deleted successfully.');
}
}