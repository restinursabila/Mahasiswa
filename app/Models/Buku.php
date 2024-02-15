<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit'
    ];
    public function kategoribukurelasi()
{
    return $this->hasMany(kategoribukurelasi::class, 'buku_id');
}
public function kategori()
{
    return $this->belongsToMany
    (kategori::class, 'kategoribukurelasi', 'buku_id', 'kategori_id');
}
}
