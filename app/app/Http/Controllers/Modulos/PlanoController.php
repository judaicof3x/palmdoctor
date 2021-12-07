<?php

namespace App\Http\Controllers\Modulos;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Order;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Livewire\str;

class PlanoController extends Controller
{
    protected $plan, $card, $order;

    public function __construct(Plan $plan, Card $card, Order $order)
    {
        $this->plan = $plan;
        $this->card = $card;
        $this->order = $order;
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

        return view('painel.planos.checkout', compact('plan', 'cards'));
    }

    public function capture(Request $request, $url)
    {
        $card = $this->card->find($request->card);
        $plan = $this->plan->where('url', $url)->first();
        $user = Auth::user();

        // Criando a data de expiração para a adesão e a data de inicio para assinatura, partindo da data de captura da transação
        $expires_at = new \DateTime(now());
        $expires_at->add(new \DateInterval('P6M'));
        $expires_at = $expires_at->format('d/m/Y');

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://sandbox.ipag.com.br/service/payment",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n    \"amount\": \"$plan->entry\",\n    \"callback_url\": \"https://99mystore.com.br/ipag/callback\",\n    \"payment\": {\n        \"type\": \"card\",\n        \"method\": \"visa\",\n        \"installments\": 1,\n        \"capture\": true,\n        \"card\": {\n            \"holder\": \"$card->holder\",\n            \"number\": \"$card->number\",\n            \"expiry_month\": \"$card->expiry_month\",\n            \"expiry_year\": \"$card->expiry_year\",\n            \"cvv\": \"$card->cvv\"\n        }\n    },\n    \"customer\": {\n        \"name\": \"$user->name\"\n    },\n    \"subscription\": {\n        \"frequency\": \"$plan->frequency\",\n        \"interval\": \"$plan->interval\",\n        \"start_date\": \"$expires_at\",\n\t\t\t\t\"amount\": \"$plan->amount\"\n    }\n}",
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic am9hb3ZzdmllaXJhLm1lQGdtYWlsLmNvbTozQkU2LUZDQTA1NjQ2LUNFNEE1QUM4LTYxM0I2MkM0LUU0QTA=",
                "Content-Type: application/json",
                "x-api-version: 2"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, true);

            $adesao = $this->order->create([
                'user_id' => $user->id,
                'type' => 0,
                'plan_id' => $plan->id,
                'ipag_id' => $response['id'],
                'status' => $response['attributes']['status']['message'],
                'starting_at' => date('d/m/Y', strtotime($response['attributes']['captured_at'])),
                'expires_at' => $expires_at,
                'method' => "Cartão de crédito",
            ]);

            $assinatura = $this->order->create([
                'user_id' => $user->id,
                'type' => 1,
                'plan_id' => $plan->id,
                'ipag_id' => $response['attributes']['subscription']['id'],
                'status' => $response['attributes']['subscription']['attributes']['status'],
                'starting_at' => $expires_at,
                'expires_at' => null,
                'method' => "Cartão de crédito",
            ]);

            return redirect()->route('painel.planos.capture.success', $url);
        }
    }

    public function captureSuccess()
    {
        return view('painel.planos.obrigado');
    }
}
