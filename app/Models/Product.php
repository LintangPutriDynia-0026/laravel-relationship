<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'berat',
        'gambar',
        'kondisi',
        'deskripsi',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
