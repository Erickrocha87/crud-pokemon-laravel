<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function pokemon() : HasMany {
       
        return $this->hasMany(Pokemon::class);
    }
}