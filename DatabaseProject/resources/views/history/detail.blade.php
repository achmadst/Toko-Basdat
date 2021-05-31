@extends('layouts.app')

@section('content')
<<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>History</h1>
					<nav class="d-flex align-items-center">
						<a href="{{ url('home') }}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="{{ url('history') }}">History<span class="lnr lnr-arrow-right"></span></a>
						<a href="">Detail</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span width="10">Order number</span> : {{ $checkout->id }}</a></li>
							<li><a href="#"><span>Date</span> : {{ $checkout->tanggal_checkout }}</a></li>
							<li><a href="#"><span>Total</span> : IDR {{number_format($checkout->harga_total_kirim)}}</a></li>
							<li><a href="#"><span>Payment method</span> : {{ $checkout->bayar }}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="details_item">
						<h4>Shipping Information</h4>
						<ul class="list">
							<li><a href="#"><span width="10">Name</span> : {{ $user->name }}</a></li>
							<li><a href="#"><span>Email</span> : {{ $user->email }}</a></li>
							<li><a href="#"><span>Phone</span> : {{ $user->no_hp }}</a></li>
							<li><a href="#"><span>Address</span> : {{ $user->alamat }}</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							@foreach($keranjangs as $keranjang)
							<tr>
								<td>
									<p>{{ $keranjang->barang->nama_barang}}</p>
								</td>
								<td>
									<h5>x{{ $keranjang->jumlah_pemesanan}}</h5>
								</td>
								<td>
									<p>IDR {{ number_format($keranjang->jumlah_harga)}}</p>
								</td>
							</tr>
							@endforeach
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>IDR {{number_format($checkout->harga_total)}}</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: IDR {{number_format($checkout->ongkos_kirim)}}</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>IDR {{number_format($checkout->harga_total_kirim)}}</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
@endsection