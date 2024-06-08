
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>AGM</title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/font-awesome.min.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/font-linearicons.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/bootstrap.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/bootstrap-theme.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/jquery.fancybox.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/jquery-ui.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/owl.carousel.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/owl.transitions.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/owl.theme.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/theme.css')}}" media="all"/>
		<link rel="stylesheet" type="text/css" href="{{ ('/asset/css/responsive.css')}}" media="all"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<!--css-->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<style>
		#social-links ul{
				padding-left: 0;
		}
		#social-links ul li {
				display: inline-block;
		} 
		#social-links ul li a {
				padding: 10px;
				/* 	 */
				/* background : #ccc; */
				border-radius: 5px;
				margin-top:0px;
				margin: 2px;
				font-size: 20px;
		}
		/* #social-links .fa-facebook{
				color: #0d6efd;
		}
		#social-links .fa-twitter{
				color: deepskyblue;
		}
		#social-links .fa-linkedin{
				color: #0e76a8;
		}
		#social-links .fa-whatsapp{
				color: #25D366
		}
		#social-links .fa-reddit{
				color: #FF4500;;
		}
		#social-links .fa-telegram{
				color: #0088cc;
		} */
		</style>
	</head>
	<body>
	<div class="wrap">
		<!-- End Header -->
		<div id="content">
			<!-- End Category Slider -->
			<div class="main-content">
				<div class="container">
					<div class="bread-crumb">
						<a href="/catalog">Katalog</a> <span class="lnr lnr-chevron-right"></span> <span>Detail Informasi</span>
					</div>
					@foreach ($produk as $p )
					<div class="row">
						<div class="col-md-9 col-sm-8 col-xs-12">
							<div class="content-product-detail has-sidebar">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="product-gallery">
											<div class="clearfix">
												<ul class="bxslider">
													<li><a href="#" data-toggle="modal" data-target=".pop-up-1"><img src="{{ Storage::url($p->gambar1) }}" alt="" /></a></li>
													<li><a href="#" data-toggle="modal" data-target=".pop-up-2"><img src="{{ Storage::url($p->gambar2) }}" alt="" /></a></li>
													<li><img src="{{ Storage::url($p->gambar3) }}" alt="" /></li>
													<li><img src="{{ Storage::url($p->gambar4) }}"  alt=""/></li>
												</ul>
												<div id="bx-pager">
													<a data-slide-index="0" href=""><img src="{{ Storage::url($p->gambar1) }}" alt="" /></a>
													<a data-slide-index="1" href=""><img src="{{ Storage::url($p->gambar2) }}" alt="" /></a>
													<a data-slide-index="2" href=""><img src="{{ Storage::url($p->gambar3) }}" alt="" /></a>
													<a data-slide-index="3" href=""><img src="{{ Storage::url($p->gambar4) }}" alt="" /></a>
												</div>
											</div>
											<div id="social-links" class="social-btn-sp">
												<ul class="list-inline share-social" >
													{!! $socialShare	!!}
													<!-- <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
													<li><a href="#"><i class="fa fa-youtube-square"></i></a></li> -->
												</ul>
											</div>
										</div>
										<!-- End Product Gallery -->
									</div>
									<!--  Modal content for the mixer image example -->
									<div class="modal fade pop-up-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">

											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myLargeModalLabel-1">Art Gallery Muhadjir</h4>
											</div>
											<div class="modal-body">
											<div class="clearfix">
												<ul class="bxslider">
													<li><a href="#" data-toggle="modal" data-target=".pop-up-1"><img src="{{ Storage::url($p->gambar1) }}" alt="" /></a></li>
													<li><a href="#" data-toggle="modal" data-target=".pop-up-2"><img src="{{ Storage::url($p->gambar2) }}" alt="" /></a></li>
													<li><img src="{{ Storage::url($p->gambar3) }}" alt="" /></li>
													<li><img src="{{ Storage::url($p->gambar4) }}"  alt=""/></li>
												</ul>
											</div>
											<!-- <img src="{{ Storage::url($p->gambar1) }}" class="img-responsive img-rounded center-block" alt=""> -->
											</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal mixer image -->
									
									<!--  Modal content for the lion image example -->
									<div class="modal fade pop-up-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">

											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title" id="myLargeModalLabel-2">Lion</h4>
											</div>
											<div class="modal-body">
											<img src="{{ Storage::url($p->gambar2) }}" class="img-responsive img-rounded center-block" alt="">
											</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal mixer image -->
									
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="info-product-detail">
											<h2 class="title-product-detail">{{$p->judul}}</h2>
											<!-- <div class="wrap-star-rating">
												<div class="inner-star-rating" style="width:70%"></div>
											</div> -->
											<!-- <p class="desc">Deskripsi:</p> -->
											<p class="desc">{{$p->deskripsi}}</p>
											<table class="desc">
												<tr>
													<td width="70%">Ukuran</td>
													<td width="30%">: {{$p->ukuran}}</td>
												</tr>
												<tr>
													<td width="70%">Media/Teknik</td>
													<td width="30%">: {{$p->media}}</td>
												</tr>
												<tr>
													<td width="70%">Tahunan Pembuatan</td>
													<td width="30%">: {{$p->tahun}}</td>
												</tr>
											</table>
											<div class="info-price">
												<span>@currency($p->harga)</span>
											</div>
					
											<div class="wrap-cart-qty">
												<a href="https://api.whatsapp.com/send?phone=628981500648" class="btn-link-default add-to-cart">Hubungi</a>
												<!-- <div class="info-extra">
													<a href="#" class="link-wishlist"><span class="lnr lnr-heart"></span></a>
													<a href="#" class="link-compare"><span class="lnr lnr-sync"></span></a>
												</div> -->
											</div>
										</div>
									</div>
								</div>
								@foreach ($produk as $p )
								<!-- End Product Top -->
								<div class="detail-product-tab">
							<!-- Nav tabs -->
							<br>
							<div class="nav-tabs-default">
								<h3>Tambahkan Komentar</h3>
							</div>
							<div>
								<form action="/komen" method="post" enctype="multipart/form-data">
									@csrf
									<input type="text" hidden name="id_produk" value="{{$p->id}}">
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputPassword3" placeholder="email@gmail.com" name="email" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword3" class="col-sm-2 col-form-label">Komentar</label>
										<div class="col-sm-10">
											<textarea type="text" class="form-control" name="text" id="inputPassword3" ></textarea>
										</div>
									</div>
									
									<button class="bt-link bt-gold bt-radius bt-shadow bt-style28 pull-right mb-auto" type="submit">Tambahkan</button>
								</form>
							</div>
							@endforeach
							<br><br><br><br>
							
							<div class="box-intro">
								<h2><span class="title">Komentar</span></h2>
								<span class="desc-title">Art Gallery Muhadjir</span>
							</div>
							<!-- Tab panes -->
							<div class="tab-content">
								@foreach ($komen as $k )
								<div role="tabpanel" class="tab-pane active" id="home">
									<strong><p>{{$k->nama}}</p></strong>
									<p>{{$k->text}}</p>
									<hr>
								</div>
								@endforeach
							</div>
						</div>
								<!-- End Product Tab -->
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="sidebar sidebar-right sidebar-product">
								<div class="widget widget-category">
									<h2 class="widget-title sub-title">Kategori Produk</h2>
									<h3><a href="#">Tema</a></h3>
									<ul>
										@foreach ($tema as $t )
										<li><a href="/kategori/tema/{{$t->id}}">{{$t->tema}}</a></li>
										@endforeach
									</ul>
									<h3><a href="#">Ukuran</a></h3>
									<ul>
										@foreach ($ukuran as $u )
										<li><a href="/kategori/ukuran/{{$u->id}}">{{$u->ukuran}}</a></li>
										@endforeach
									</ul>
								</div>
								<div class="widget widget-top-seller">
									<h2 class="widget-title sub-title">Produk Baru</h2>
									<ul>
										@foreach ($newproduk as $n )
										<li class="clearfix">
											<div class="product-thumb">
												<a href="/detail/{{$n->id}}"><img class="img-responsive" src="{{ Storage::url($n->gambar2) }}" alt="" /></a>
											</div>	
											<h3 class="title-product"><a href="/detail/{{$n->id}}">{{$n->judul}}</a></h3>
											<div class="info-price">
												<h5><b>@currency($n->harga)</b></h5>
											</div>
										</li>	
										@endforeach
									</ul>
								</div>
							</div>
							<!-- End Sidebar -->
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- End Grid Product -->
		</div>
		
		
	</div>
		<script type="text/javascript" src="{{('/asset/js/jquery-1.10.2.min.js')}}"></script>
		<script type="text/javascript" src="{{('/asset/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{('/asset/js/jquery.fancybox.js')}}"></script>
		<script type="text/javascript" src="{{('/asset/js/jquery-ui.js')}}"></script>
		<script type="text/javascript" src="{{('/asset/js/owl.carousel.js')}}"></script>
		<script type="text/javascript" src="{{('/asset/js/jquery.bxslider.js')}}"></script>
		<script type="text/javascript" src="{{('/asset/js/theme.js')}}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="{{('/asset/js/share.js')}}"></script>
	</body>
	</html>