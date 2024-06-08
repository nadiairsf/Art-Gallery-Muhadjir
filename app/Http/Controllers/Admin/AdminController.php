<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\PengaturanModel;
use DB;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->Produk     = new ProdukModel();
        $this->Pengaturan = new PengaturanModel();
    }

    public function index()
    {

        $ukuran = DB::table('ukuran')->get();
        $tema   = DB::table('tema')->get();

        // dd($ukuran,$tema);
        return view('admin.add-product', ['ukuran' => $ukuran, 'tema' => $tema]);
    }

    public function tema()
    {
        $tema = $this->Pengaturan->tema()->get();

        return view('admin.add-tema',['tema'=>$tema]);
    }

    public function storeTema(Request $request)
    {
        $tema = $this->Pengaturan->tema()->insert([
                'tema' => $request->tema
            ]);

        return redirect()->back()->with(['success' => 'Data Berhasil di Tambahkan']);
    
    }

    public function deleteTema($id)
    {
        $tema = $this->Pengaturan->tema()->where('id',$id)->delete();

        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus']);
    }

    public function ukuran()
    {
        $ukuran = $this->Pengaturan->ukuran()->get();

        return view('admin.add-ukuran',['ukuran' => $ukuran]);
    }

    public function storeUkuran(Request $request)
    {
        $ukuran = $this->Pengaturan->ukuran()->insert([
                'ukuran' => $request->ukuran
            ]);

        return redirect()->back()->with(['success' => 'Data Berhasil di Tambahkan']);;
    
    }

    public function deleteUkuran($id)
    {
        $ukuran= $this->Pengaturan->ukuran()->where('id',$id)->delete();

        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus']);
    }
}
