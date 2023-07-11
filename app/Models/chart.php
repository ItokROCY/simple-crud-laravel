<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chart extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = ['nama_barang', 'jumlah_barang'];
}
