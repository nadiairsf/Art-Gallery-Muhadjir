@extends('admin.master')
@section('add-product','active')
@section('content')
<div id="main">
      <header class="mb-3">
         <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
         </a>
      </header>
         <div class="page-heading">
            <div class="page-title">
                  <div class="row">
                     <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tambah Lukisan</h3>
                     </div>
                     <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Tambah Lukisan</li>
                              </ol>
                        </nav>
                     </div>
                  </div>
            </div>

            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                  <div class="row match-height">
                     <div class="col-md-12 col-12">
                        <div class="card">
                              <div class="card-header">
                                 <h4 class="card-title">Tambah Lukisan</h4>
                              </div>
                              <div class="card-content">
                                 <div class="card-body">
                                    <form class="form form-horizontal" method="post" action="/create" enctype="multipart/form-data">
                                         @csrf
                                         <input hidden type="text" id="id" name="id"></input>
                                          <div class="form-body">
                                             <div class="row">
                                                <div class="col-md-4">
                                                      <label>Judul</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                      <input type="text" id="judul" class="form-control" name="judul">
                                                </div>
                                                <div class="col-md-4">
                                                      <label>Media/Teknik</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                      <input type="text" id="media" class="form-control" name="media">
                                                </div>
                                                <div class="col-md-4">
                                                      <label>Tahun Pembuatan</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                      <input type="text" id="tahun" class="form-control" name="tahun">
                                                </div>
                                                <div class="col-md-4">
                                                      <label>Harga</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                      <input type="number" id="harga" class="form-control" name="harga">
                                                </div>
                                                <div class="col-md-4">
                                                      <label>Deskripsi</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                                </div>

                                                <div class="col-md-6 mb-4 mt-2">
                                                      <h6>Ukuran</h6>
                                                      <div class="input-group mb-3">
                                                         <label class="input-group-text" for="id_ukuran">Ukuran</label>
                                                         <select class="form-select" id="id_ukuran" name="id_ukuran">
                                                         <option selected="">Pilih Ukuran</option>
                                                         @foreach ( $ukuran as $p )
                                                            <option value="{{ $p->id }}">{{ $p->ukuran }}</option>
                                                         @endforeach                                                                                                                   
                                                         </select>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 mb-4 mt-2">
                                                      <h6>Tema</h6>
                                                      <div class="input-group mb-3">
                                                         <label class="input-group-text" for="id_tema">Tema</label>
                                                         <select class="form-select" id="id_tema" name="id_tema">
                                                            <option selected="">Pilih Tema</option>
                                                         @foreach ($tema as $p)
                                                            <option value="{{ $p->id }}">{{ $p->tema }}</option>
                                                         @endforeach
                                                         </select>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                      <div class="input-group mb-3">
                                                         <div class="input-group mb-3">
                                                            <label class="input-group-text" for="gambar1"><i class="bi bi-upload"></i></label>
                                                            <input type="file" class="form-control" id="gambar1" name="gambar1">
                                                         </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                      <div class="input-group mb-3">
                                                         <div class="input-group mb-3">
                                                            <label class="input-group-text" for="gambar1"><i class="bi bi-upload"></i></label>
                                                            <input type="file" class="form-control" id="gambar1" name="gambar2">
                                                         </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                      <div class="input-group mb-3">
                                                         <div class="input-group mb-3">
                                                            <label class="input-group-text" for="gambar1"><i class="bi bi-upload"></i></label>
                                                            <input type="file" class="form-control" id="gambar1" name="gambar3">
                                                         </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                      <div class="input-group mb-3">
                                                         <div class="input-group mb-3">
                                                            <label class="input-group-text" for="gambar1"><i class="bi bi-upload"></i></label>
                                                            <input type="file" class="form-control" id="gambar1" name="gambar4">
                                                         </div>
                                                      </div>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                      <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                      <button type="reset"
                                                         class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                             </div>
                                          </div>
                                    </form>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
            </section>
            <!-- // Basic Horizontal form layout section end -->
         </div>
</div>
@endsection