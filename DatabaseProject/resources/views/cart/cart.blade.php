@extends('layouts.app')

@section('content')
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">    
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Bag</h1>
                    <nav class="d-flex align-items-center">
                        <a href="home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    @if(!empty($checkout))
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($keranjangs as $keranjang)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{url ('Frontend/img/product') }}/{{ $keranjang->barang->foto_barang }}" width="150" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{ $keranjang->barang->nama_barang}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td align="center">
                                    <h5>{{ $keranjang->jumlah_pemesanan}}</h5>
                                </td>
                                <td> 
                                    <h5>IDR {{ number_format($keranjang->barang->harga_barang)}}</h5>
                                </td>
                                <td>
                                    <h5>IDR {{ number_format($keranjang->jumlah_harga)}}</h5>
                                </td>
                                <td>
                                    <form method="post" action="{{ url('cart') }}/{{ $keranjang->id }}">
                                    @csrf
                                    {{ method_field('DELETE')}}
							            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')"><i class="fa fa-trash"></i></button>
						            </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><h5 align="left">Purchase date : {{$checkout->tanggal_checkout}}</h5></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>IDR {{number_format($checkout->harga_total)}}</h5>
                                </td>
                            <tr class="out_button_area">
                                <td colspan="3"></td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="home">Continue Shopping</a>
                                        <a class="primary-btn" href="check-out" onclick="return confirm('Are you sure you want to checkout this order?')">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    <div class="col-lg-12" align="center">
                        <h4>The cart is empty</h4>
                        <img class="img-fluid" src="{{url ('Frontend/img/empty.png') }}" width="500"alt="">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
@endsection