<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = ['no', 'nama_barang', 'jumlah_barang', 'harga'];
    protected $dates = ['created_at', 'updated_at'];
}
