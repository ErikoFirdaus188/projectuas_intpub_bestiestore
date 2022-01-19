<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databrg extends Model
{
    use HasFactory;
    protected $table = "databrg2";
    protected $primarykey = "id";
    protected $fillable = [
        'id_barang','id_suplier','jenis','size','warna','qty','harga'
    ];
    
    
}
