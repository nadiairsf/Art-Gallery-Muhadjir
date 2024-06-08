@extends('admin.master')
@section('setting','active')
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
                        <h3>Pengaturan</h3>
                     </div>
                     @if ($message = Session::get('success'))
                        <div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> {{$message}} </div>
                     @endif
                     <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Pengaturan</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Tambah Tema</li>
                              </ol>
                        </nav>
                     </div>
                  </div>
            </div>

            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
               <div class="row match-height">
                  <div class="col-md-6 col-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Tambah Ukuran</h4>
                           </div>
                           <div class="card-content">
                              <div class="card-body">
                                    <form class="form form-horizontal" action="/submit-ukuran" method="post" enctype="multipart/form-data">
                                       @csrf
                                       <div class="form-body">
                                          <div class="row">
                                                <div class="col-md-4">
                                                   <label>Ukuran</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                   <input type="text" id="first-name" class="form-control" name="ukuran">
                                                </div>
                                               
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                   <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                             
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
                                       <th>Ukuran</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 @php
                                    $no=1;
                                 @endphp
                                  @foreach ($ukuran as $u )
                                 <tbody>                                                                 
                                    <tr>
                                       <td>{{$no++}}</td>
                                       <td>{{$u->ukuran}}</td>
                                       <td>
                                       <a href="/delete/ukuran/{{$u->id}}" class="btn btn-danger m-1" onclick="return confirm('Yakin Untak Nonaktifkan Toko?')" data-toggle="tooltip" data-placement="top" title="Non">
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
            <!-- // Basic Horizontal form layout section end -->
         </div>
</div>
@endsection