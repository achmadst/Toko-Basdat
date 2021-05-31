<?php

namespace App\Http\Controllers;
use App\User;
use App\Barang;
use App\Checkout;
use App\Keranjang;
use Auth;
use SweetAlert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $checkouts = Checkout::where('user_id', Auth::user()->id)->where('status', 2)->get();
        return view('history.index', compact('checkouts'));
    }

    public function detail($id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $checkout = Checkout::where('id', $id)->first();
        $keranjangs = Keranjang::where('checkout_id', $checkout->id)->get();

        return view('history.detail', compact('checkout', 'keranjangs', 'user'));
    }
}
