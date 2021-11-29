<?php

namespace App\Http\Controllers\Modulos;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanoController extends Controller
{
    protected $plan, $card;

    public function __construct(Plan $plan, Card $card)
    {
        $this->plan = $plan;
        $this->card = $card;
    }

    public function index()
    {
        $plans = $this->plan->get();
        return view('painel.planos.index', compact('plans'));
    }

    public function checkout($url)
    {
        $plan = Plan::where('url', $url)->first();
        $cards = $this->card->where('user_id', Auth::user()->id)
                            ->orderBy('default', 'desc')
                            ->get();

//        foreach ($cards as $card)
//            echo substr_replace($card->number, '**** ', 0, 14) . "<br>";
//            die();

        return view('painel.planos.checkout', compact('plan', 'cards'));
    }

    public function capture(Request $request)
    {
        dd($request);
    }
}
