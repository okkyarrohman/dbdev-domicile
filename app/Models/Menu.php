<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'favorite',
        'gambar', // ini wajib ada
    ];
}
