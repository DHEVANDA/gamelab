<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        // sesuaikan dengan yang ada migrations
        'gambar',
        'nama_menu',
        'harga',
        'deskripsi',
    ];
}
