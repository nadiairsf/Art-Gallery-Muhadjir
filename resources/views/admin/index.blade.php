@extends('admin.master')
@section('dashboard','active')
@section('content')

   <div id="main">
      <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
               <i class="bi bi-justify fs-3"></i>
            </a>
      </header>
      <div class="page-heading">
            <h3>Dashboard Admin</h3>
      </div>
      <div class="page-content">
         <section class="row">
            <div class="col-12 col-lg-9">
               <div class="row">
                     <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                           <div class="card-body px-3 py-4-5">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="stats-icon red">
                                             <i class="iconly-boldBookmark"></i>
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <h6 class="text-muted font-semibold">Jumlah Lukisan</h6>
                                       <?php $countP = DB::table('produk')->count();?>
                                       <h6 class="font-extrabold mb-0">Total : {{$countP}}</h6>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                           <div class="card-body px-3 py-4-5">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="stats-icon purple">
                                             <i class="iconly-boldShow"></i>
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <h6 class="text-muted font-semibold">Jumlah Komentar</h6>
                                       <?php $countK = DB::table('komentar')->count();?>
                                       <h6 class="font-extrabold mb-0">{{$countK}}</h6>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </section>
         @if ($message = Session::get('success'))
            <div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> {{$message}} </div>
         @endif
         <section class="section">
            <div class="card">
               <div class="card-body">
                     <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-top">
                           <!-- <div class="dataTable-dropdown">
                                 <select class="dataTable-selector form-select">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                 </select>
                           </div> -->
                           <div class="dataTable-search ">
                                 <input class="dataTable-input" placeholder="Search..." type="text">
                           </div>
                        </div>
                        <div class="dataTable-container">
                           <table class="table table-striped dataTable-table" id="table1">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tema</th>
                                    <th>Ukuran</th>
                                    <th>Media/Teknik</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Harga</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              @php
                                 $no=1;
                              @endphp
                                 @foreach ($produk as $p )
                              <tbody>                                                                 
                                 <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$p->judul}}</td>
                                    <td>{{$p->tema}}</td>
                                    <td>{{$p->ukuran}}</td>
                                    <td>{{$p->media}}</td>
                                    <td>{{$p->tahun}}</td>
                                    <td>{{$p->harga}}</td>
                                    <td><img src="{{ Storage::url($p->gambar1) }}" width="100px" alt="Lukisan" data-bs-toggle="modal" data-bs-target="#galleryModal"></td>
                                    <td>
                                    <a href="/detail/produk/{{$p->id}}" class="btn btn-success m-1">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                          </svg>
                                    </a>
                                    <a href="/delete/produk/{{$p->id}}" class="btn btn-danger m-1" onclick="return confirm('Yakin untuk hapus produk?')" data-toggle="tooltip" data-placement="top" title="Non">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                    </a>
                                    </td>
                                 </tr>
                              </tbody>
                              @endforeach
                           </table>
                        </div>
                        <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"aria-labelledby="galleryModalTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                          <h5 class="modal-title" id="galleryModalTitle">Our Gallery Example</h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                             aria-label="Close">
                                             <i data-feather="x"></i>
                                          </button>
                                    </div>
                                    <div class="modal-body">

                                          <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                             <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                </div>
                                             <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                      <img class="d-block w-100" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                                </div>
                                                <div class="carousel-item">
                                                      <img class="d-block w-100" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80">
                                                </div>
                                             </div>
                                             <a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             </a>
                                             <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                             </a>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        <!-- <div class="dataTable-bottom">
                           <div class="dataTable-info">Showing 1 to 1 of 1 entries</div>
                           <ul class="pagination pagination-primary float-end dataTable-pagination">
                                 <li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li>
                                 <li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li>
                                 <li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li>
                                 <li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li>
                                 <li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li>
                           </ul>
                        </div> -->
                     </div>
               </div>
            </div>
         </section>
      </div>
   </div>

@endsection