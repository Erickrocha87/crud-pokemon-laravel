<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Owner;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::simplePaginate(8);
        return view('pokemon.index', compact('pokemon'));
    }

    public function create()
    {
        $owners = Owner::all();
        return view('pokemon.create', compact('owners'));
    }

    public function store(Request $request)
    {
        $image = $request->file("image")->store("images", "public");
        $pokemon = Pokemon::create([
            "owner_id"=>$request->owner_id,
            "name"=>$request->name,
            "type"=>$request->type,
            "power_points"=>$request->power_points,
            "image"=>$image,
            
        ]);
        return redirect('pokemon/index')->with('success', 'Pokemon created successfully.');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon.edit', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);

        if($request->hasFile('image')) {
            $image = $request->file("image")->store("images", "public");
        } else {
            $image = $pokemon->image;
        }
        $pokemon = $pokemon->update([
            "name"=>$request->name,
            "type"=>$request->type,
            "power_points"=>$request->power_points,
            "image"=>$image
        ]);

        return redirect('pokemon/index')->with('success', 'Pokemon updated successfully.');
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
    }
}
