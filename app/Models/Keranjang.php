<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use HasFactory;
    protected $table = 'keranjangs';
    protected $fillable = [
        'nama',
        'nm_barang',
        'jumlah',
        'alamat',
    ];
   
}