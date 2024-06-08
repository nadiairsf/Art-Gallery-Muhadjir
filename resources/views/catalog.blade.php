
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>AGM</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/font-linearicons.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/bootstrap.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/bootstrap-theme.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/jquery.fancybox.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/jquery-ui.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/owl.transitions.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/owl.theme.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/theme.css')}}" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/responsive.css')}}" media="all"/>
	<script>var mobile=628981500648;</script>
	<script src="https://webbuilder7.com/addchat/loadchat.js"></script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<div class="logo logo-header">
							<a href="index.html"><h1><span class="lnr lnr-apartment"></span> AGM</h1></a>	
						</div>
					</div>
					<div class="col-md-8 col-sm-11 col-xs-12">
						<div class="main-nav">
							<ul class="main-menu">
                        <li><a href="/">Beranda</a></li>
								<li><a href="/catalog">Katalog</a></li>
							</ul>
							<div class="mobile-menu">
								<a href="#" class="show-menu"><span class="lnr lnr-indent-decrease"></span></a>
								<a href="#" class="hide-menu"><span class="lnr lnr-indent-increase"></span></a>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-1 col-xs-12">
						<div class="info-header info-header2">
							<ul class="info-total">
								<li class="info-search">
									<a href="#" class="info-icon icon-search"><span class="lnr lnr-magnifier"></span></a>
									<div class="search-form">
										<form method="get" action="/cari">
											<div class="wrap-toggle-search">
													<!-- <div class="toggle-search-category">
														<a href="#" class="toggle-category"><span class="lnr lnr-chevron-down"></span></a>
														<ul class="select-category list-unstyled">
															@foreach ($tema as $t )
															<li><a href="/kategori/tema/{{$t->id}}">{{$t->tema}}</a></li>
															@endforeach
														</ul>
													</div> -->
												<input type="text" name="cari" value="{{old('cari')}}" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
											</div>
											<input class="btn-link-default" type="submit" value="Cari" />
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Header -->
	<div id="content">
		<!-- End Category Slider -->
		<div class="main-content">
			<div class="container">
				<div class="bread-crumb">
					<a href="/">Home</a> <span class="lnr lnr-chevron-right"></span> <span>Katalog</span>
				</div>
				
				<div class="product-grid">
					<div class="sort-pagi-bar top clearfix">
						<ul class="product-pagi-nav pull-right list-inline">
							<li><a href="#" class="active">1</a></li>
							<!-- <li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#" class="next"><span class="lnr lnr-chevron-right"></span></a></li> -->
						</ul>
					</div>
					<ul class="list-product row list-unstyled">
						@foreach ($produk as $p )
						<li class="col-md-4 col-sm-6 col-xs-12">
							<div class="item-product">
								<div class="item-product-thumb">
									<a href="#" class="product-thumb-link"><img class="img-responsive" src="{{ Storage::url($p->gambar2) }}" alt="" /></a>
									<!-- <div class="product-box-promotion">
										<span class="new-item">new</span>
										<span class="sale-item">-20%</span>
									</div> -->
								</div>
								<div class="item-product-info">
									<h3 class="title-product"><a href="#">{{$p->judul}}</a></h3>
									<div class="info-price">
										<span>@currency($p->harga)</span>
									</div>
								</div>
								<div class="popular-post-date">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<span class="lnr lnr-calendar-full"></span> <span>{{$p->created_at}}</span>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<a href="/detail/{{$p->id}}" class="readmore"><span class="lnr lnr-arrow-right-circle"></span>Detail Infromasi</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						@endforeach
					</ul> 
				</div>
				
			</div>
		</div>
		<!-- End Grid Product -->
	</div>
	<!-- End Content -->
	<!-- <div id="footer">
		<div class="footer footer-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="logo logo-footer">
							<a href="#" class="sub-title"><span class="lnr lnr-apartment"></span> Art Galllery Of Muhadjir</a>
						</div>
						<div class="download">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-12">
									<img class="img-responsive" src="{{ ('asset/images/img-download.png') }}" alt="" />
								</div>	
								<div class="col-md-8 col-sm-8 col-xs-12">
									<p>Ds. Sidorejo Jl. Lawu No. 19 Kec. Wungu Kab. Madiun Jawa Timur Indonesia </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="footer-nav">
							<h2 class="sub-title">Account</h2>
							<ul class="list-unstyled">
								<li><a href="#">Search Terms</a></li>
								<li><a href="#">Advanced Search</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="menu-footer">
								<ul class="list-inline">
									<li><a href="#">Home</a></li>
									<li><a href="#">Terms of Service </a></li>
									<li><a href="#">Privacy Guidelines</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="copyright">
								<p>Copyright @ Art Gallery Muhadjir 2021. All Right Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Footer -->
</div>
	<script type="text/javascript" src="{{('/asset/js/jquery-1.10.2.min.js')}}"></script>
	<script type="text/javascript" src="{{('/asset/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{('/asset/js/jquery.fancybox.js')}}"></script>
	<script type="text/javascript" src="{{('/asset/js/jquery-ui.js')}}"></script>
	<script type="text/javascript" src="{{('/asset/js/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{('/asset/js/theme.js')}}"></script>
</body>
</html>