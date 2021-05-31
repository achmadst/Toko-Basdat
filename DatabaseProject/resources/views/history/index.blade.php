@extends('layouts.app')

@section('content')
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">    
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>History</h1>
                    <nav class="d-flex align-items-center">
                        <a href="home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="history">History</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================History Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <h4><i class="fa fa-history"></i> History</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Subtotal</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($checkouts as $checkout)
                            <tr>
                                <td class="align-middle">{{ $checkout->tanggal_checkout }}</td>
                                <td class="align-middle">
                                    @if( $checkout->status == 2)
                                    Belum Dibayar
                                    @elseif( $checkout->status == 3)
                                    Proses Pengiriman
                                    @endif
                                </td>
                                <td class="align-middle">IDR {{ number_format($checkout->harga_total_kirim) }}</td>
                                <td><a href="{{ url('history')}}/{{ $checkout->id }}" class="primary-btn"><i class="fa fa-info"></i>Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End History Area =================-->
@endsection