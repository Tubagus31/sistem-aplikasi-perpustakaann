<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable =[
        'Judul_Buku',
        'Kode_Buku',
        'Penulis',
        'Penerbit',
        'Status_Buku',
        'Tanggal_Terbit'
       ];
}
