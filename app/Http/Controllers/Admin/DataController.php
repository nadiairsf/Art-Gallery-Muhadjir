<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ProdukModel;
use App\Models\KomentarModel;
use App\Models\PengaturanModel;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    //
    public function __construct()
    {
        $this->Produk  = new ProdukModel();
        $this->Komen   = new KomentarModel();
        $this->Tema       = new PengaturanModel();
        $this->Ukuran     = new PengaturanModel();
    }

    public function index()
    {

        $produk = $this->Produk->produk()
            ->join('tema','produk.id_tema','=','tema.id')
            ->join('ukuran','produk.id_ukuran','=','ukuran.id')
            ->select('produk.*','tema.tema','ukuran.ukuran')
            ->get();


        return view ('admin.index',['produk'=>$produk]);
    }


    public function detail($id)
    {

        $produk = $this->Produk->produk()
            ->join('tema','produk.id_tema','=','tema.id')
            ->join('ukuran','produk.id_ukuran','=','ukuran.id')
            ->select('produk.*','tema.tema','ukuran.ukuran')
            ->where('produk.id',$id)->get();

        $tema = $this->Tema->tema()->get();
        $ukuran = $this->Ukuran->ukuran()->get();


        return view ('admin.edit-product',['produk' => $produk,
                                           'ukuran' => $ukuran,
                                           'tema'   => $tema
                                        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'gambar1' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'gambar2' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'gambar3' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'gambar4' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

       

        // $path1 = $request->file('gambar1');
        // $fileName = pathinfo($path1->getClientOriginalName(), PATHINFO_FILENAME);
        // $extension = pathinfo($path1->getClientOriginalName(), PATHINFO_EXTENSION);
        // $fullFileName = $fileName."-".time().$path1->getClientOriginalExtension();

        // $path1->text('MyNotePaper', 710, 370, function ($font) {
        //     $font->file(public_path('font/amandasignature.ttf'));
        //     $font->size(30);
        //     $font->color('#f4d442');
        //     $font->align('center');
        //     $font->valign('top');
        //     $font->angle(0);
        // });

        $path1 = $request->file('gambar1')->store('public/images'); 
        $path2 = $request->file('gambar2')->store('public/images');
        $path3 = $request->file('gambar3')->store('public/images');
        $path4 = $request->file('gambar4')->store('public/images');



         

        
        $post = new ProdukModel();
        $post->id                = $request->input('id');
        $post->judul             = $request->input('judul');
        $post->media             = $request->input('media');
        $post->tahun             = $request->input('tahun');
        $post->id_ukuran         = $request->input('id_ukuran');
        $post->id_tema           = $request->input('id_tema');
        $post->harga             = $request->input('harga');
        $post->deskripsi         = $request->input('deskripsi');
        $post->gambar1           = $path1;
        $post->gambar2           = $path2;
        $post->gambar3           = $path3;
        $post->gambar4           = $path4;
       
        $post->save();
        // dd($post);

        return redirect('/admin')->with(['success' => 'Data Berhasil di Tambahkan']);
 

    }

    public function update(Request $request, ProdukModel $blog)
    {
        $this->validate($request, [
            'judul' => 'required',
            'media' => 'required',
            'tahun' => 'required',
            'id_ukuran' => 'required',
            'id_tema' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar1' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        //get data Blog by ID
        $blog = ProdukModel::findOrFail($blog->id);

        if($request->file('gambar1') == "") {

            $blog->update([
                'judul'     => $request->judul,
                'media'   => $request->media,
                'tahun'   => $request->tahun,
                'id_ukuran'   => $request->id_ukuran,
                'id_tema'   => $request->id_tema,
                'harga'   => $request->harga,
                'deskripsi'   => $request->deskripsi,
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/images/'.$blog->image);

            //upload new image
            // $gambar1 = $request->file('gambar1');
           
            // $gambar1->storeAs('public/images', $gambar1->hashName());
            $gambar1 = $request->file('gambar1')->store('public/images');
            

            $blog->update([
                'gambar1'     => $gambar1,
             
            ]);

        }

        if($blog){
            //redirect dengan pesan sukses
            return redirect('/admin')->with(['success' => 'Data Berhasil di Update']);
        }else{
            //redirect dengan pesan error
           return redirect()->back();
        }
    }



    public function delete($id)
    {
       $produk = $this->Produk->produk()->where('id',$id)->delete();

       return redirect()->back();
   }
  
}
