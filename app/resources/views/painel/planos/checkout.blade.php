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
                <!--begin::Actions-->
                <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                    <small class="text-gray-600 my-auto"><i class="las la-lock fs-5"></i> Ambiente 100% seguro</small>
                </div>
                <!--end::Actions-->
            </div>
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div class="col-lg-7 col-12" style="padding-right: 5px; padding-left: 20px;">
                <!--begin::Billing Summary-->
                <div class="card mb-6 mb-xl-9">
                    <!--begin::Card body-->
                    <div class="card-body">

                        <h5 class="my-5 text-gray-800">Selecione uma forma de pagamento:</h5>

                        <form action="{{ route('painel.planos.capture', $plan->url) }}" method="post">
                            @csrf

                            <div class="mb-5"></div>

                            @if(!$cards)
                                <a href="">Adicionar cartão</a>
                            @else
                                @foreach($cards as $card)

                                <!--begin::Radio group-->
                                    <div data-kt-buttons="true">
                                        <!--begin::Radio button-->
                                        <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start p-6 mb-5">
                                            <!--end::Description-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                    <input class="form-check-input" type="radio" name="card" value="{{ $card->id }}" required="required"/>
                                                </div>
                                                <!--end::Radio-->

                                                <!--begin::Info-->
                                                <div class="flex-grow-1">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <img src="https://preview.keenthemes.com/craft/assets/media/svg/card-logos/mastercard.svg" alt="" class="me-4">
                                                        <!--end::Icon-->
                                                        <!--begin::Details-->
                                                        <div>
                                                            <div class="fs-4 fw-boldest">Mastercard @php echo substr_replace($card->number, '**** ', 0, 14) @endphp</div>
                                                            <div class="fs-6 fw-bold text-gray-400">Cartão expira em {{ $card->expiry_month }}/{{ $card->expiry_year }}</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Description-->

                                            @if($card->default == 1)
                                                <div class="ms-5">
                                                    <span class="badge badge-light-primary">Principal</span>
                                                </div>
                                            @endif
                                        </label>
                                        <!--end::Radio button-->
                                    </div>
                                <!--end::Radio group-->

                                @endforeach

                                <button type="submit" class="btn btn-primary col-12">Pagar agora no cartão</button>
                            @endif

                        </form>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Billing Summary-->
            </div>
            <!--end::Container-->

            <!--begin::Container-->
            <div class="col-lg-5 col-12" style="padding-left: 5px; padding-right: 20px;">
                <!--begin::Billing Summary-->
                <div class="card mb-6 mb-xl-9">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-12">
                                <div class="d-flex flex-stack card-p flex-grow-1">
                                    <!--begin::Icon-->
                                    <div class="symbol symbol-45px">
                                        <div class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black"></path>
                                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black"></path>
                                                    <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column text-end">
                                        <span class="fw-boldest text-gray-800 fs-2">Resumo do pedido</span>
                                        <span class="small text-success"><i class="las la-check-double text-success"></i> Sua compra 100% segura</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <p class="mb-6 mb-lg-4"><b>Plano {{ $plan->name }}:</b> {{ $plan->description }}</p>
                                <p class="mb-0">Subtotal: <span style="float: right;">R$ {{ number_format($plan->entry, 2, ',', '.') }}</span></p>
                                <p class=""><b>Total à vista: <span class="h2" style="float: right;">R$ {{ number_format($plan->entry, 2, ',', '.') }}</span></b></p>
                                <hr>
                                <div class="text-gray-600 fw-bold mb-8 mb-lg-0 text-center">
                                    <img src="{{ URL::asset('media/svg/card-logos/visa.svg') }}" alt="" class="h-30px">
                                    <img src="{{ URL::asset('media/svg/card-logos/mastercard.svg') }}" alt="" class="h-30px">
                                    <img src="{{ URL::asset('media/svg/card-logos/american-express.svg') }}" alt="" class="h-30px">
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Billing Summary-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

@endsection
