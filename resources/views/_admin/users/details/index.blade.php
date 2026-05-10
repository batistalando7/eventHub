@extends('layouts._admin.main')
@section('title', 'Assessorarte- Visualizar Autor')
@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">users</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        @can('is-admin')
                            <a href="/admin">Home</a>
                        @endcan
                    </li>
                    <li class="breadcrumb-item">Meu Perfil</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-icon btn-light-brand">
                            <i class="feather-printer"></i>
                        </a>
                        <a href="{{ route('admin.user.edit', ['user' => $user->slug]) }}" class="btn btn-icon btn-light-brand">
                            <i class="feather-edit"></i>
                        </a>
                        @can('is-admin')
                            <a href="{{ route('admin.user.delete', ['user' => $user->slug]) }}" class="btn btn-icon btn-light-brand">
                                <i class="feather-trash-2"></i>
                            </a>
                        @endcan

                        @can('is-editor')
                            <a href="{{ route('admin.user.index') }}" class="btn btn-danger ">
                                <i class="feather-chevron-left me-2"></i>
                                <span>Voltar</span>

                            </a>
                        @endcan
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <div class="main-content">
            <div class="col-xxl-10">
                <div class="row">
                    <div class="col">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="wd-150 ht-150">
                                        <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                            @if ($user->id === Auth::user()->id)

                                                <img src="{{ url('img/users/' . Auth::user()->image) }}"
                                                    alt="foto de {{ $user->name }}" class="img-fluid">
                                            @else
                                                <img src="{{ url('img/users/' . $user->image) }}"
                                                    alt="foto de {{ $user->name }}" class="img-fluid">
                                            @endif
                                        </div>

                                    </div>
                                    <div class="mb-4 profile-detail">
                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block">
                                            Nome: {{ $user->name }}
                                        </a>

                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block">
                                            E-mail: {{ $user->email }}
                                        </a>

                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block">
                                            Função: {{ $user->role }}
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
