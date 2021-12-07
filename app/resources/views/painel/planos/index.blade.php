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

    <div class="row g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-8">
            <!--begin::Row-->
            <div class="row g-xl-8">
                @foreach($plans as $plan)
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Chart Widget 1-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8 border">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <!--begin::Section-->
                                    <div class="pt-12">
                                        <!--begin::Title-->
                                        <h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">{{ $plan->name }}</h3>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="text-center text-gray-600 fs-5 fw-bold pt-4 pb-1">{{ $plan->description }}</div>
                                        <!--end::Text-->
                                        <!--begin::Details-->
                                        <ul class="text-gray-700 py-7">
                                            <li>Até {{ $plan->dependent }} @if($plan->dependent > 1) pessoas @else pessoa @endif </li>
                                            <li>Todos os recursos de telemedicina</li>
                                        </ul>
                                        <!--end::Details-->
                                        <!--begin::Details-->
                                        <h3 class="text-gray-800">Mensalidade: R$ {{ $plan->amount }}</h3>
                                        <h3 class="text-gray-800">Valor de adesão 6 meses: R$ {{ $plan->entry }}</h3>
                                        <!--end::Details-->
                                        <!--begin::Action-->
                                        <div class="text-center py-7">
                                            <a href="{{ route('painel.planos.checkout', $plan->url) }}" class="btn btn-primary fs-6 px-6">Contratar</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Image-->
                                    <!--end::Image-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart Widget 1-->
                    </div>
                    <!--end::Col-->
                @endforeach
            </div>
            <!--end::Row-->
        </div>
        <!--end::Col-->
    </div>
@endsection
