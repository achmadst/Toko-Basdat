@extends('layouts.app')

@section('content')
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container mb-5">
			<div class="row s_product_inner">
				<div class="col-lg-3 mt-5">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{url ('Frontend/img/product') }}/{{ $barang->foto_barang }}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{url ('Frontend/img/product') }}/{{ $barang->foto_barang }}" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="{{url ('Frontend/img/product') }}/{{ $barang->foto_barang }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-8 offset-lg-1">
					<div class="s_product_text">
						<h3>{{ $barang->nama_barang}}</h3>
						<h2><strong>IDR {{ number_format($barang->harga_barang) }}</strong></h2>
						<ul class="list">
							<li><a class="active" href=""><span>Category</span> : Household</a></li>
							<li><a href=""><span>Availibility</span> : {{ $barang->stok_barang}}</a></li>
						</ul>
						<p>{{ $barang->deskripsi_barang}}</p>
						<form method="post" action="{{ url('detail') }}/{{ $barang->id }}">
						@csrf
							<label>Quantity:
								<input type="text" name="banyak_pesan" class="form-control" required="">
							</label>
							<div class="card_area d-flex align-items-center mt-3 form-group">
								<button class="primary-btn" value="submit" type="submit">Add to Cart</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->
@endsection
