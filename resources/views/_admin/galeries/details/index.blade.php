@extends('layouts._admin.main')
@section('title', 'Assessorarte- Visualizar Autor')
@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">galerys</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">View</li>
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
                        <a href="leads-create.html" class="btn btn-icon btn-light-brand">
                            <i class="feather-edit"></i>
                        </a>
                        <div class="dropdown">
                            <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-user-x me-3"></i>
                                    <span>Make as Lost</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-delete me-3"></i>
                                    <span>Make as Junk</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-trash-2 me-3"></i>
                                    <span>Delete as Lead</span>
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('admin.galery.index') }}" class="btn btn-danger ">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>

                        </a>
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
                                <div class="mb-4 text-center">
                                    <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">

                                        @forelse ($galery->images as $img)
                                            <div class="position-relative" style="width:150px; height:150px;">

                                                <!-- Imagem -->
                                                <a href="{{ asset('img/galeries/' . $img) }}" target="_blank">
                                                    <img src="{{ asset('img/galeries/' . $img) }}"
                                                        alt="{{ $galery->title }}" class="img-fluid rounded border border-3"
                                                        style="width:150px; height:150px; object-fit: cover;">
                                                </a>

                                                <!-- Ícone de status (exemplo: check) -->
                                                <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle"
                                                    style="top: 76%; right: 10px;">
                                                    <i class="bi bi-patch-check-fill"></i>
                                                </div>

                                            </div>
                                        @empty
                                            <div class="text-center w-100 py-4">
                                                <p class="text-muted">Nenhuma imagem cadastrada</p>
                                            </div>
                                        @endforelse

                                    </div>

                                    <div class="mb-4">
                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block">
                                            {{ $galery->title }}</a>
                                    </div>
                                    <div class="fs-12 fw-normal text-muted text-center d-flex flex-wrap gap-3 mb-4">
                                        <div
                                            class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">Descrição</h6>
                                            <p class="fs-12 text-muted mb-0">{{ $galery->description ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <div class="d-flex gap-2 text-center pt-4">
                                        <a href="{{ route('admin.galery.delete', ['galery' => $galery]) }}"
                                            class="w-50 btn btn-light-brand">
                                            <i class="feather-trash-2 me-2"></i>
                                            <span>Deletar</span>
                                        </a>
                                        <a href="{{ route('admin.galery.edit', ['galery' => $galery]) }}"
                                            class="w-50 btn btn-danger">
                                            <i class="feather-edit me-2"></i>
                                            <span>Editar Perfil</span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
