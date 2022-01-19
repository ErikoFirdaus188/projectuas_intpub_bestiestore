<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapenjualan extends Model
{
    use HasFactory;
    protected $table = "datapenjualan";
    protected $primarykey = "id";
    protected $fillable = [
        'id','id_jual','id_barang','qty','harga'
    ];
}
