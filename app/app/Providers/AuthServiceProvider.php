<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('plan-active', function (User $user) {
            $orders = Order::where('user_id', $user->id)->get();
            $adesao = $orders->where('type', 0)->first();
            $assinatura = $orders->where('type', 1)->first();

            if (isset($adesao) == 'CAPTURED' AND $adesao->status == 'CAPTURED') { // Verifica se uma adesão existe e se ela foi paga
                if ($adesao->expires_at > now()) { // Verifica se ainda está dentro do periodo da adesão. Ex: os 6 primeiros meses
                    return true;
                } else { // Caso esteja fora do periodo da adesão, então verifica a assinatura
                    if ($assinatura->status == 'paid') { // caso esteja com o status paga
                        return true;
                    } else{
                        return false;
                    }
                }
            } else {
                return false;
            }
        });

        Gate::define('plan-inative', function (User $user) {
            $orders = Order::where('user_id', $user->id)->get();
            $adesao = $orders->where('type', 0)->first();
            $assinatura = $orders->where('type', 1)->first();

            if (!isset($adesao) OR $adesao->status != 'CAPTURED') {
                return true;
            } else {
                return false;
            }
        });
    }
}
