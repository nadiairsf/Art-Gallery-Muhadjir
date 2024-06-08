<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KomentarModel;

use Illuminate\Http\Request;

class KomenController extends Controller
{
    //
     //
     public function __construct()
     {
         $this->Komen   = new KomentarModel();
     }

     public function index()
     {
        
         $komen = $this->Komen->komen()
            ->join('produk','komentar.id_produk','=','produk.id')
            ->select('komentar.*',
                     'produk.judul')
            ->paginate(10);

         return view ('admin.commentar',['komen' => $komen]);
     }

     public function delete($id)
     {
        $komen = $this->Komen->komen()->where('id',$id)->delete();

        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus']);
    }
}
