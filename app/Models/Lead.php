<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    public function project()
{
    return $this->hasOne(Project::class);
}

    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'status'];
}
