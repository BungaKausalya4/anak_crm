<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'product_id',
        'status',
        'project_name',
    ];

    // Relasi dengan Product (satu proyek hanya memiliki satu produk)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi dengan Lead (satu proyek hanya memiliki satu lead)
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
