<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\KomentarModel;
use App\Models\PengaturanModel;
use DB;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->Produk     = new ProdukModel();
        $this->Komentar   = new KomentarModel();
        $this->Tema       = new PengaturanModel();
        $this->Ukuran     = new PengaturanModel();
    }

    public function index()
    {
        $produk = $this->Produk->produk()->orderBy('id', 'DESC')->paginate(3);

        return view('index',['produk' => $produk]);
    }

    public function catalog()
    {
        $produk = $this->Produk->produk()->paginate(20);
        $tema = $this->Tema->tema()->get();

        return view('catalog',['produk' => $produk,'tema' => $tema]);
    }

    public function detail($id)
    {
        $produk = $this->Produk->produk()
            ->join('ukuran','produk.id_ukuran','=','ukuran.id')
            ->select('produk.*','ukuran.ukuran')
            ->where('produk.id',$id)->get();

        $komen = $this->Komentar->komen()
            ->where('id_produk',$id)
            ->get();

        $socialShare = \Share::page(
            'https://www.nicesnippets.com/blog/laravel-custom-foreign-key-name-example',
            'Art Gallery Muhadjir',
        )
            ->facebook()
            ->twitter()
            ->whatsapp();

            $tema = $this->Tema->tema()->get();
            $ukuran = $this->Ukuran->ukuran()->get();

            $newproduk = $this->Produk->produk()->paginate(3);

        return view('detail',['produk' => $produk, 
                              'komen' => $komen,
                              'socialShare' => $socialShare,
                              'tema'    => $tema,
                              'ukuran'  => $ukuran,
                              'newproduk'   => $newproduk
                            ]);
    }

    public function komentar(Request $request)
    {
        $komen = $this->Komentar->komen()->insert([
            'id_produk' => $request->id_produk,
			'nama' => $request->nama,
			'email' => $request->email,
			'text' => $request->text

        ]);
    
       return redirect()->back();
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$produk = DB::table('produk')
		->where('judul','like',"%".$cari."%")
		->paginate(20);
 
    	// mengirim data pegawai ke view index
		return view('catalog',['produk' => $produk]);
 
	}

    //Kategroi
    public function Ktgtema(Request $request, $id)
    {
        $produk = $this->Produk->produk()
        ->join('tema','produk.id_tema','=','tema.id')
        ->where('tema.id',$id)
        ->paginate(20);

        return view('catalog',['produk' => $produk]);
    }

    public function Ktgukuran(Request $request, $id)
    {
        $produk = $this->Produk->produk()
        ->join('ukuran','produk.id_ukuran','=','ukuran.id')
        ->where('ukuran.id',$id)
        ->paginate(20);

        return view('catalog',['produk' => $produk]);
    }

    
}