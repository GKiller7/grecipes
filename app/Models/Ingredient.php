<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
