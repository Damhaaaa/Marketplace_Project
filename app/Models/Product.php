<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // Tambahkan field 'title' ke dalam properti $fillable
        'description',
        'image_path',
    ];
}
