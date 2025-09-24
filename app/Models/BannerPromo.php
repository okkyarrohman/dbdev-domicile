<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerPromo extends Model
{
    use HasFactory;

    // Nama tabel (opsional kalau sesuai konvensi)
    protected $table = 'banner_promos';

    // Kolom yang bisa diisi
    protected $fillable = [
        'img',
        'keterangan',
    ];
}
