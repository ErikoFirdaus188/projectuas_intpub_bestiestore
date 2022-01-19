<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasuplier extends Model
{
    use HasFactory;
    protected $table = "datasuplier";
    protected $primarykey = "id";
    protected $fillable = [
        'id','id_suplier','nama_suplier','alamat'
    ];
}
