<?php
 
namespace App\Policies;

use App\Models\Pokemon;
use App\Models\Post;
use App\Models\User;
 
class PokemonPolicy
{
    public function create(User $user, Pokemon $pokemon): bool
    {
        return !is_null($user);
    }
    public function delete(User $user, Pokemon $pokemon): bool
    {
        return !is_null($user);
    }
    public function update(User $user, Pokemon $pokemon): bool
    {
        return !is_null($user);
    }
}