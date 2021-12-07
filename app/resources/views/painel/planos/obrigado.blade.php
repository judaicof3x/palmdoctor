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

    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <div class="container-fluid d-flex justify-content-end flex-stack flex-wrap flex-sm-nowrap">
            </div>
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="container">
            <h2>Obrigado! A sua adesão foi paga com sucesso e todos os recursos já foram liberados para você.</h2>
            <h4>A sua adesão foi paga e você já pode começar a usar.</h4>
            <h4>A sua assinatura mensal começa em 15/04/2022</h4>
        </div>
        <!--end::Post-->
    </div>

@endsection
