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

    @can('plan-active')
        Plano Ativo
    @endcan
    @can('plan-inative')
        <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
            <!--begin::Logo-->
            <a class="mb-12">
                <img alt="Logo" src="{{ URL::asset('media/logos/logo-colored.png') }}" class="h-90px">
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="text-center">
                <!--begin::Logo-->
                <h1 class="fw-bolder fs-2qx text-dark mb-7">Bem vindo à Palm Doctor</h1>
                <!--end::Logo-->
                <!--begin::Message-->
                <div class="fw-bold fs-2 text-gray-400 mb-15">Notamos que você não possui um plano ativo...<br>Vamos escolher um plano agora ?</div>
                <!--end::Message-->
                <!--begin::Link-->
                <a href="{{ route('painel.planos.index') }}" class="btn btn-lg btn-primary">Ir para planos de saúde</a>
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
        </div>
    @endcan
@endsection
