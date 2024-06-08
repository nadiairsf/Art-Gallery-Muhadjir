<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class PengaturanModel extends Model
{
    use HasFactory;
    public function tema()
    {
        return DB::table('tema');
    }

    public function ukuran()
    {
        return DB::table('ukuran');
    }
}
