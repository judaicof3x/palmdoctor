<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PainelController extends Controller
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function home()
    {
        $orders = $this->order->where('user_id', Auth::user()->id)->get();
        return view('painel.home', compact('orders'));
    }
}
