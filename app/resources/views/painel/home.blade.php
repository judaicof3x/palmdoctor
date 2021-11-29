@extends('templates.main')

@section('page-js')
    <script src="{{ URL::asset('plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ URL::asset('js/custom/modals/create-app.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/select-location.js') }}"></script>
    <script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
    <script src="{{ URL::asset('js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/create-project.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ URL::asset('js/custom/intro.js') }}"></script>
    <!--end::Page Custom Javascript-->
@endsection

@section('page-content')

    <!-- Caso o usuário não possua plano de saúde vinculado ao CPF -->
    @if(!isset(session('plano')['count']) or session('plano')['count'] == 0)

        <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
            <!--begin::Logo-->
            <a class="mb-12">
                <img alt="Logo" src="http://localhost:8000/assets/media/logos/logo-colored.png" class="h-90px">
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="text-center">
                <!--begin::Logo-->
                <h1 class="fw-bolder fs-2qx text-dark mb-7">Bem vindo à Palm Doctor</h1>
                <!--end::Logo-->
                <!--begin::Message-->
                <div class="fw-bold fs-2 text-gray-400 mb-15">Notamos que você não possui um plano de saúde...<br>Vamos escolher um plano agora ?</div>
                <!--end::Message-->
                <!--begin::Link-->
                <a href="" class="btn btn-lg btn-primary">Ir para planos de saúde</a>
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
        </div>

    @elseif(session('plano')['count'] == 1)

        @foreach(session('plano')['plano'] as $plano)
            <h1>ID: {{ $plano['id'] }}</h1>
            <h2>Status do plano:
                @if($plano['attributes']['is_active'] == 1)
                    Ativo
                @elseif($plano['attributes']['is_active'] == 0)
                    Inativo
                @endif
            </h2>
            <h2>Status do pagamento:
                @if($plano['attributes']['status'] == 'paid')
                    Pago
                @elseif($plano['attributes']['status'] == 'overdue')
                    Atrasada
                @elseif($plano['attributes']['status'] == 'pending')
                    Pendente
                @endif


            </h2>
            <h2>A assinatura termina em: {{ date("d/m/Y", strtotime($plano['attributes']['closing_date'])) }}</h2>
            <h2>Dia para pagamento: {{ $plano['attributes']['charging_day'] }}</h2>
            @if($plano['attributes']['status'] == 'pending' or $plano['attributes']['status'] == 'overdue')
                <h2>
                    Link para pagamento: <a href="{{ $plano['attributes']['links']['payment'] }}">clique aqui</a>
                </h2>
            @endif


            <a href="">acessar plano</a>
        @endforeach

    @elseif(session('plano')['count'] >= 2)

        @foreach(session('plano')['plano'] as $plano)
            <h1>ID: {{ $plano['id'] }}</h1>
            <h2>Status do plano:
                @if($plano['attributes']['is_active'] == 1)
                    Ativo
                @elseif($plano['attributes']['is_active'] == 0)
                    Inativo
                @endif
            </h2>
            <h2>Status do pagamento:
                @if($plano['attributes']['status'] == 'paid')
                    <span class="text-success">Pago</span>
                @elseif($plano['attributes']['status'] == 'overdue')
                    <span class="text-warning">Atrasada</span>
                @elseif($plano['attributes']['status'] == 'pending')
                    <span class="text-danger">Pendente</span>
                @endif
            </h2>

            <h2>Status da assinatura:
                @if(strtotime($plano['attributes']['closing_date']) < strtotime(now()))
                    Já expirou
                @elseif(strtotime($plano['attributes']['closing_date']) > strtotime(now()))
                    Ainda está aberta
                @endif
            </h2>

            <h2>Expira em: {{ date("d/m/Y", strtotime($plano['attributes']['closing_date'])) }}</h2>
            <h2>Dia do pagamento: {{ $plano['attributes']['charging_day'] }}</h2>
            @if($plano['attributes']['status'] == 'pending' or $plano['attributes']['status'] == 'overdue')
                <h2>
                    Link para pagamento: <a href="{{ $plano['attributes']['links']['payment'] }}">clique aqui</a>
                </h2>
            @endif
            <hr>
        @endforeach

        <div class="alert alert-danger">
                <pre>
                    {{ print_r(session('plano')['plano']) }}
                </pre>
        </div>

    @endif
@endsection
