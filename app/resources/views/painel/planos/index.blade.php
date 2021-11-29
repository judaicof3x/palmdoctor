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

    @foreach($plans as $plan)
        <a href="{{ route('painel.planos.checkout', $plan->url) }}">Plano {{ $plan->id }} - {{ $plan->name }}</a>
    @endforeach

@endsection
