<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    // Relasi dengan Project (satu produk bisa memiliki banyak proyek)
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
