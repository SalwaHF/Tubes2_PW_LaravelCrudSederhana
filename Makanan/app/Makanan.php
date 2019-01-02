<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Makanan extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
    use SoftDeletes;
 
    protected $fillable = [
        'nama_menu', 'kategori_menu', 'harga'
    ];
    protected $dates = ['deleted_at'];
}

?>