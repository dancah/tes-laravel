<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'kode',
        'jumlah',
        'harga',
        'keterangan',
        'gambar',
    ];

function image()
    {
        if ($this->gambar && file_exists(public_path('gambar/' . $this->gambar)))
            return asset('gambar/' . $this->gambar);
        else
            return asset('gambar/no_image.png');
    }

    function delete_image()
    {
        if ($this->gambar && file_exists(public_path('gambar/' . $this->gambar)))
            return unlink(public_path('gambar/' . $this->gambar));
    }
}