@extends('templates.main')

@section('page-js')
    <script src="{{ URL::asset('js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ URL::asset('js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ URL::asset('js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/two-factor-authentication.js') }}"></script>
    <script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
    <script src="{{ URL::asset('js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/create-project.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ URL::asset('js/custom/intro.js') }}"></script>
@endsection

@section('body-attr')
    data-bs-spy="scroll" data-bs-target="#kt_account_settings" data-bs-offset="200" data-bs-target-offset="175"
@endsection

@section('page-content')
    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder my-1 fs-2">Minha conta</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb fw-bold fs-base my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('painel.home') }}" class="text-muted text-hover-primary">Palm Doctor</a>
                        </li>
                        <li class="breadcrumb-item text-muted">Minha conta</li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div class="container-xxl">
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Aside-->
                    <div class="flex-column flex-md-row-auto w-100 w-lg-250px w-xxl-275px">
                        <!--begin::Nav-->
                        <div class="card mb-6 mb-xl-9" data-kt-sticky="true" data-kt-sticky-name="account-settings" data-kt-sticky-offset="{default: false, lg: 300}" data-kt-sticky-width="{lg: '250px', xxl: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-zindex="95">
                            <!--begin::Card body-->
                            <div class="card-body py-10 px-6">
                                <!--begin::Menu-->
                                <ul id="kt_account_settings" class="nav nav-flush menu menu-column menu-rounded menu-title-gray-600 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-6 mb-2">
                                    <li class="menu-item px-3 pt-0 pb-1">
                                        <a href="#resumo" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link active">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-vertical"></span>
                                            </span>
                                            <span class="menu-title">Resumo</span>
                                        </a>
                                    </li>
                                    <li class="menu-item px-3 pt-0 pb-1">
                                        <a href="#acessos" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-vertical"></span>
                                            </span>
                                            <span class="menu-title">Acessos</span>
                                        </a>
                                    </li>
                                    <li class="menu-item px-3 pt-0 pb-1">
                                        <a href="#informacoespessoais" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-vertical"></span>
                                            </span>
                                            <span class="menu-title">Informações pessoais</span>
                                        </a>
                                    </li>
{{--                                    <li class="menu-item px-3 pt-0 pb-1">--}}
{{--                                        <a href="#contas" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link">--}}
{{--                                            <span class="menu-bullet">--}}
{{--                                                <span class="bullet bullet-vertical"></span>--}}
{{--                                            </span>--}}
{{--                                            <span class="menu-title">Connected Accounts</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu-item px-3 pt-0">--}}
{{--                                        <a href="#notificacoes" data-kt-scroll-toggle="true" class="menu-link px-3 nav-link">--}}
{{--                                            <span class="menu-bullet">--}}
{{--                                                <span class="bullet bullet-vertical"></span>--}}
{{--                                            </span>--}}
{{--                                            <span class="menu-title">Notificações</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                                <!--end::Menu-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Aside-->
                    <!--begin::Layout-->
                    <div class="flex-md-row-fluid ms-lg-12">
                        <!--begin::Overview-->
                        <div class="card mb-5 mb-xl-10" id="resumo" data-kt-scroll-offset="{default: 100, md: 125}">
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_overview">
                                <div class="card-title">
                                    <h3 class="fw-boldest m-0">Resumo</h3>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_overview" class="collapse show">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <div class="d-flex align-items-start flex-wrap">
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-125px mb-7 me-7 position-relative">
                                                <img src="{{ URL::asset('media/avatars/150-2.jpg') }}" alt="image" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Profile-->
                                            <div class="d-flex flex-column">
                                                <div class="fs-2 fw-boldest mb-1">{{ Auth::user()->name }}</div>
                                                <a href="#" class="text-gray-400 text-hover-primary fs-6 fw-bold mb-5">{{ Auth::user()->email }}</a>
                                                <div class="badge @can('plan-active') badge-light-success text-success @else badge-light-danger text-danger @endcan fw-boldest fs-7 me-auto mb-3 px-4 py-3">
                                                    @can('plan-active')
                                                        Ativo
                                                    @else
                                                        Inativo
                                                    @endcan
                                                </div>
                                            </div>
                                            <!--end::Profile-->
                                        </div>
                                    </div>
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed rounded p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Precisamos da sua atenção!</h4>
                                                <div class="fs-6 text-gray-700">O seu plano está inativo. Para agendar consultas, por favor
                                                    <a href="#">atualize a sua assinatura.</a></div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Overview-->
                        <!--begin::Sign-in Method-->
                        <div class="card mb-5 mb-xl-10" id="acessos" data-kt-scroll-offset="{default: 100, md: 125}">
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                                <div class="card-title m-0">
                                    <h3 class="fw-boldest m-0">Acessos</h3>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_signin_method" class="collapse show">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Email Address-->
                                    <div class="d-flex flex-wrap align-items-center mb-8">
                                        <div id="kt_signin_email">
                                            <div class="fs-4 fw-boldest mb-1">Email</div>
                                            <div class="fs-6 fw-bold text-gray-600">{{ Auth::user()->email }}</div>
                                        </div>
                                        <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                            <!--begin::Form-->
                                            <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                                        <div class="fv-row mb-0">
                                                            <label for="email" class="form-label fs-6 fw-bolder mb-3">Insira um novo email</label>
                                                            <input type="email" class="form-control form-control-lg form-control-solid fw-bold fs-6" id="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-0">
                                                            <label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid fw-bold fs-6" name="confirmemailpassword" id="confirmemailpassword" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                    <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <div id="kt_signin_email_button" class="ms-auto">
                                            <button class="btn btn-light fw-boldest px-6">Alterar email</button>
                                        </div>
                                    </div>
                                    <!--end::Email Address-->
                                    <!--begin::Password-->
                                    <div class="d-flex flex-wrap align-items-center mb-8">
                                        <div id="kt_signin_password">
                                            <div class="fs-4 fw-boldest mb-1">Senha</div>
                                            <div class="fs-6 fw-bold text-gray-600">************</div>
                                        </div>
                                        <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                            <div class="fs-6 fw-bold text-gray-600 mb-4">Password must be at least 8 character and contain symbols</div>
                                            <!--begin::Form-->
                                            <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                                <div class="row mb-6">
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-0">
                                                            <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid fw-bold fs-6" name="currentpassword" id="currentpassword" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-0">
                                                            <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid fw-bold fs-6" name="newpassword" id="newpassword" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-0">
                                                            <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid fw-bold fs-6" name="confirmpassword" id="confirmpassword" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                                    <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <div id="kt_signin_password_button" class="ms-auto">
                                            <button class="btn btn-light fw-boldest">Alterar senha</button>
                                        </div>
                                    </div>
                                    <!--end::Password-->
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
                                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Proteja sua conta</h4>
                                                <div class="fs-6 text-gray-700 pe-7">A autenticação de dois fatores adiciona uma camada extra de segurança à sua conta. Para fazer login, você também precisará fornecer um código de 6 dígitos</div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Ativar</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Sign-in Method-->
                        <!--begin::Basic info-->
                        <div class="card mb-5 mb-xl-10" id="informacoespessoais" data-kt-scroll-offset="{default: 100, md: 125}">
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_basic_info" aria-expanded="true" aria-controls="kt_account_basic_info">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h3 class="fw-boldest m-0">Informações pessoais</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_basic_info" class="collapse show">
                                <!--begin::Form-->
                                <form id="kt_account_basic_info_form" class="form">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ URL::asset('media/avatars/blank.png') }})">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ URL::asset('media/avatars/150-2.jpg') }})"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Alterar avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Remover avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remover avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Hint-->
                                                <div class="form-text">Tipos de arquivo permitidos: png, jpg, jpeg.</div>
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nome completo</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-6 fv-row">
                                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Primeiro nome" value="Marcelo" />
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-6 fv-row">
                                                        <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Último nome" value="Silva" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                <span class="required">Telefone de contato</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Número do seu whatsapp" value="021 97969-0623" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" id="kt_account_basic_info_submit">Salvar mudanças</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Basic info-->
                        <!--begin::Connected Accounts-->
{{--                        <div class="card mb-5 mb-xl-10" id="contas" data-kt-scroll-offset="{default: 100, md: 125}">--}}
{{--                            <!--begin::Card header-->--}}
{{--                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">--}}
{{--                                <div class="card-title m-0">--}}
{{--                                    <h3 class="fw-boldest m-0">Contas</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Card header-->--}}
{{--                            <!--begin::Content-->--}}
{{--                            <div id="kt_account_connected_accounts" class="collapse show">--}}
{{--                                <!--begin::Card body-->--}}
{{--                                <div class="card-body border-top p-9">--}}
{{--                                    <!--begin::Notice-->--}}
{{--                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">--}}
{{--                                        <!--begin::Icon-->--}}
{{--                                        <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->--}}
{{--                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="black" />--}}
{{--																<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="black" />--}}
{{--															</svg>--}}
{{--														</span>--}}
{{--                                        <!--end::Svg Icon-->--}}
{{--                                        <!--end::Icon-->--}}
{{--                                        <!--begin::Wrapper-->--}}
{{--                                        <div class="d-flex flex-stack flex-grow-1">--}}
{{--                                            <!--begin::Content-->--}}
{{--                                            <div class="fw-bold">--}}
{{--                                                <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.--}}
{{--                                                    <a href="#">Learn More</a></div>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Content-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Wrapper-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Notice-->--}}
{{--                                    <!--begin::Items-->--}}
{{--                                    <div class="py-2">--}}
{{--                                        <!--begin::Item-->--}}
{{--                                        <div class="d-flex flex-stack">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <img src="/craft/assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />--}}
{{--                                                <div class="d-flex flex-column">--}}
{{--                                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-boldest">Google</a>--}}
{{--                                                    <div class="fs-6 fw-bold text-gray-400">Plan properly your workflow</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex justify-content-end">--}}
{{--                                                <div class="form-check form-check-solid form-switch">--}}
{{--                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />--}}
{{--                                                    <label class="form-check-label" for="googleswitch"></label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Item-->--}}
{{--                                        <div class="separator separator-dashed my-5"></div>--}}
{{--                                        <!--begin::Item-->--}}
{{--                                        <div class="d-flex flex-stack">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <img src="/craft/assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />--}}
{{--                                                <div class="d-flex flex-column">--}}
{{--                                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-boldest">Github</a>--}}
{{--                                                    <div class="fs-6 fw-bold text-gray-400">Keep eye on on your Repositories</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex justify-content-end">--}}
{{--                                                <div class="form-check form-check-solid form-switch">--}}
{{--                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />--}}
{{--                                                    <label class="form-check-label" for="githubswitch"></label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Item-->--}}
{{--                                        <div class="separator separator-dashed my-5"></div>--}}
{{--                                        <!--begin::Item-->--}}
{{--                                        <div class="d-flex flex-stack">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <img src="/craft/assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />--}}
{{--                                                <div class="d-flex flex-column">--}}
{{--                                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-boldest">Slack</a>--}}
{{--                                                    <div class="fs-6 fw-bold text-gray-400">Integrate Projects Discussions</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex justify-content-end">--}}
{{--                                                <div class="form-check form-check-solid form-switch">--}}
{{--                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />--}}
{{--                                                    <label class="form-check-label" for="slackswitch"></label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Item-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Items-->--}}
{{--                                </div>--}}
{{--                                <!--end::Card body-->--}}
{{--                                <!--begin::Card footer-->--}}
{{--                                <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                                    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
{{--                                    <button class="btn btn-primary">Save Changes</button>--}}
{{--                                </div>--}}
{{--                                <!--end::Card footer-->--}}
{{--                            </div>--}}
{{--                            <!--end::Content-->--}}
{{--                        </div>--}}
                        <!--end::Connected Accounts-->
                        <!--begin::Notifications-->
{{--                        <div class="card mb-5 mb-xl-10" id="kt_account_settings_notifications" data-kt-scroll-offset="{default: 100, md: 125}">--}}
{{--                            <!--begin::Card header-->--}}
{{--                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">--}}
{{--                                <div class="card-title m-0">--}}
{{--                                    <h3 class="fw-boldest m-0 text-gray-800">Notifications</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--begin::Card header-->--}}
{{--                            <!--begin::Content-->--}}
{{--                            <div id="kt_account_notifications" class="collapse show">--}}
{{--                                <!--begin::Form-->--}}
{{--                                <form class="form">--}}
{{--                                    <!--begin::Card body-->--}}
{{--                                    <div class="card-body border-top px-9 pt-3 pb-4">--}}
{{--                                        <!--begin::Table-->--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-row-bordered align-middle gy-6">--}}
{{--                                                <tbody class="fs-6 fw-bold">--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <tr>--}}
{{--                                                    <td class="min-w-250px fs-4 fw-boldest">Notifications</td>--}}
{{--                                                    <td class="w-125px">--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />--}}
{{--                                                            <label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="w-125px">--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />--}}
{{--                                                            <label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <tr>--}}
{{--                                                    <td>Billing Updates</td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />--}}
{{--                                                            <label class="form-check-label ps-2" for="billing1"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />--}}
{{--                                                            <label class="form-check-label ps-2" for="billing2"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <tr>--}}
{{--                                                    <td>New Team Members</td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />--}}
{{--                                                            <label class="form-check-label ps-2" for="team1"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />--}}
{{--                                                            <label class="form-check-label ps-2" for="team2"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <tr>--}}
{{--                                                    <td>Completed Projects</td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />--}}
{{--                                                            <label class="form-check-label ps-2" for="project1"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />--}}
{{--                                                            <label class="form-check-label ps-2" for="project2"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                <tr>--}}
{{--                                                    <td class="border-bottom-0">Newsletters</td>--}}
{{--                                                    <td class="border-bottom-0">--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />--}}
{{--                                                            <label class="form-check-label ps-2" for="newsletter1"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="border-bottom-0">--}}
{{--                                                        <div class="form-check form-check-solid">--}}
{{--                                                            <input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />--}}
{{--                                                            <label class="form-check-label ps-2" for="newsletter2"></label>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <!--begin::Table row-->--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Table-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Card body-->--}}
{{--                                    <!--begin::Card footer-->--}}
{{--                                    <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                                        <button class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
{{--                                        <button class="btn btn-primary px-6">Save Changes</button>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Card footer-->--}}
{{--                                </form>--}}
{{--                                <!--end::Form-->--}}
{{--                            </div>--}}
{{--                            <!--end::Content-->--}}
{{--                        </div>--}}
                        <!--end::Notifications-->
                        <!--begin::Deactivate Account-->
{{--                        <div class="card" id="kt_account_settings_deactivate" data-kt-scroll-offset="{default: 100, md: 125}">--}}
{{--                            <!--begin::Card header-->--}}
{{--                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">--}}
{{--                                <div class="card-title m-0">--}}
{{--                                    <h3 class="fw-boldest m-0">Deactivate Account</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Card header-->--}}
{{--                            <!--begin::Content-->--}}
{{--                            <div id="kt_account_deactivate" class="collapse show">--}}
{{--                                <!--begin::Form-->--}}
{{--                                <form id="kt_account_deactivate_form" class="form">--}}
{{--                                    <!--begin::Card body-->--}}
{{--                                    <div class="card-body border-top p-9">--}}
{{--                                        <!--begin::Notice-->--}}
{{--                                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">--}}
{{--                                            <!--begin::Icon-->--}}
{{--                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->--}}
{{--                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">--}}
{{--																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />--}}
{{--																	<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />--}}
{{--																	<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />--}}
{{--																</svg>--}}
{{--															</span>--}}
{{--                                            <!--end::Svg Icon-->--}}
{{--                                            <!--end::Icon-->--}}
{{--                                            <!--begin::Wrapper-->--}}
{{--                                            <div class="d-flex flex-stack flex-grow-1">--}}
{{--                                                <!--begin::Content-->--}}
{{--                                                <div class="fw-bold">--}}
{{--                                                    <h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>--}}
{{--                                                    <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.--}}
{{--                                                        <br />--}}
{{--                                                        <a href="#">Learn more</a></div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Content-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Wrapper-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Notice-->--}}
{{--                                        <!--begin::Form input row-->--}}
{{--                                        <div class="form-check form-check-solid fv-row">--}}
{{--                                            <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />--}}
{{--                                            <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">Confirm Account Deactivation</label>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Form input row-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Card body-->--}}
{{--                                    <!--begin::Card footer-->--}}
{{--                                    <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                                        <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold">Deactivate Account</button>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Card footer-->--}}
{{--                                </form>--}}
{{--                                <!--end::Form-->--}}
{{--                            </div>--}}
{{--                            <!--end::Content-->--}}
{{--                        </div>--}}
                        <!--end::Deactivate Account-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--begin::Modals-->
                <!--begin::Modal - Two-factor authentication-->
                <div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal header-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header flex-stack">
                                <!--begin::Title-->
                                <div class="fs-1 fw-boldest">Choose An Authentication Method</div>
                                <!--end::Title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-2x">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                                <!--begin::Options-->
                                <div data-kt-element="options">
                                    <!--begin::Notice-->
                                    <p class="text-gray-400 fs-4 fw-bold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
                                    <!--end::Notice-->
                                    <!--begin::Wrapper-->
                                    <div class="pb-10">
                                        <!--begin::Option-->
                                        <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                            <span class="svg-icon svg-icon-4x me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																	<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
																</svg>
															</span>
                                            <!--end::Svg Icon-->
                                            <span class="d-block fw-bold text-start">
																<span class="text-dark fw-boldest d-block fs-3">Authenticator Apps</span>
																<span class="text-gray-400 fw-bold fs-4">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
															</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                            <span class="svg-icon svg-icon-4x me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
																	<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
																</svg>
															</span>
                                            <!--end::Svg Icon-->
                                            <span class="d-block fw-bold text-start">
																<span class="text-dark fw-boldest d-block fs-3">SMS</span>
																<span class="text-gray-400 fw-bold fs-4">We will send a code via SMS if you need to use your backup login method.</span>
															</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                    <!--begin::Action-->
                                    <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Options-->
                                <!--begin::Apps-->
                                <div class="d-none" data-kt-element="apps">
                                    <!--begin::Heading-->
                                    <h3 class="text-dark fw-boldest fs-3 mb-7">Authenticator Apps</h3>
                                    <!--end::Heading-->
                                    <!--begin::Description-->
                                    <div class="text-gray-500 fw-bold fs-5 mb-10">Using an authenticator app like
                                        <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                                        <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                                        <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                                        <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                                        <!--begin::QR code image-->
                                        <div class="pt-5 text-center">
                                            <img src="/craft/assets/media/misc/qr.png" alt="" class="mw-150px" />
                                        </div>
                                        <!--end::QR code image--></div>
                                    <!--end::Description-->
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed rounded mb-10 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
                                                    <div class="fw-boldest text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--begin::Form-->
                                    <form data-kt-element="apps-form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-center">
                                            <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Options-->
                                <!--begin::SMS-->
                                <div class="d-none" data-kt-element="sms">
                                    <!--begin::Heading-->
                                    <h3 class="text-dark fw-boldest fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                                    <!--end::Heading-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
                                    <!--end::Notice-->
                                    <!--begin::Form-->
                                    <form data-kt-element="sms-form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-center">
                                            <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::SMS-->
                            </div>
                            <!--begin::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal header-->
                </div>
                <!--end::Modal - Two-factor authentication-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
