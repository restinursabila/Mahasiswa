<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    protected $fillable = [
        'nama_kategori'
    ];

public function kategoribukurelasi()
{
    return $this->hasmany
    (kategoribukurelasi::class, 'kategori_id');
}
}
