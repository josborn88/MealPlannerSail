<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Ingredient;

class Meal extends Model 
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categories',
        'notes',
        'last_made'
    ];

    protected $casts = [
        'last_made' => 'datetime',
        'password' => 'hashed',
        'categories' => 'array',
    ];


    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    } 
    
}
