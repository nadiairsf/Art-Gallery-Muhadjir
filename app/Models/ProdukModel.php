<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table    = 'produk';
    protected $fillable = [
        'judul',
        'media',
        'tahun',
        'id_ukuran',
        'id_tema',
        'harga',
        'deskripsi',
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4'

    ];

    protected $guarded = [];

    public function produk()
    {
        return DB::table('produk');
    }
}
