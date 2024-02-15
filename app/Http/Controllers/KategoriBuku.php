<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Kategoribukurelasi;

class KategoriBuku extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view ('buku.kategori', ['kategori'=>$kategori]);
    }
}
