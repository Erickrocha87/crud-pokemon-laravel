<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'power_points',
        'image',
        'owner_id'
    ];

    public function owner() : BelongsTo {
       
        return $this->belongsTo(Owner::class, 'owner_id');
    }
}