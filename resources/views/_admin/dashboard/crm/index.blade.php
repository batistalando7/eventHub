{{-- @extends('._admin.dashboard.crm.graficos') --}}
@extends('layouts._admin.main')
@section('title', 'Assessorarte- Visão Geral')
@section('content')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Visão Geral</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">Visão Geral</li>
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
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <!-- [Notícias Publicadas] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-share"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span
                                                class="counter">{{ $publicNews ?? '' }}</span>/<span
                                                class="counter">{{ $qtdNews ?? '' }}</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Notícias Publicadas</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line">Notícias Publicadas </a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">{{ $publicNews ?? '' }} Completadas</span>
                                        <span class="fs-11 text-muted">({{ $publicNewsPrecent ?? '10' }}%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ $publicNewsPrecent ?? '10' }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Notícias Publicadas] end -->
                <!-- [Notícias Arquivadas] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-archive"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span
                                                class="counter">{{ $filedNews ?? '' }}</span>/<span
                                                class="counter">{{ $qtdNews ?? '' }}</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Notícias Arquivadas</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line">Notícias Arquivadas </a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">{{ $filedNews ?? '' }} Completadas</span>
                                        <span class="fs-11 text-muted">({{ $filedNewsPrecent ?? '' }}%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        style="width: {{ $filedNewsPrecent ?? '63' }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Notícias Arquivadas] end -->
                <!-- [Notícias em Rascunho] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-briefcase"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span
                                                class="counter">{{ $draftNews ?? '' }}</span>/<span
                                                class="counter">{{ $qtdNews ?? '' }}</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Notícias em Rascunho</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line">Notícias em Rascunho</a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">{{ $draftNews ?? '' }} Completadas</span>
                                        <span class="fs-11 text-muted">({{ $draftNewsPrecent ?? '' }}%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        style="width: {{ $draftNewsPrecent ?? '' }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Notícias em Rascunho] end -->

                <!-- [Noticias Premium] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-award"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span
                                                class="counter">{{ $premiumNews ?? '' }}</span>/<span
                                                class="counter">{{ $qtdNews ?? '' }}</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Notícias Premium</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line">Notícias Premium</a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">{{ $premiumNews ?? '' }} Completadas</span>
                                        <span class="fs-11 text-muted">({{ $premiumNewsPrecent ?? '' }}%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ $premiumNewsPrecent ?? '' }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Notícias Premium] end -->
                <!-- [Notícias Por Categoria] start -->
                <div class="col-xxl-8">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Notícias Por Categoria</h5>
                            <div class="card-header-action">
                                <div class="card-header-btn">
                                    <div data-bs-toggle="tooltip" title="Delete">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                            data-bs-toggle="remove"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Refresh">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                            data-bs-toggle="refresh"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                            data-bs-toggle="expand"> </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                        data-bs-offset="25, 25">
                                        <div data-bs-toggle="tooltip" title="Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1">Economia</div>
                                        <h6 class="fw-bold text-dark">{{ $economicNews ?? '10' }}</h6>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: {{ $economicNewsPercent ?? 10 }}%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1">Política</div>
                                        <h6 class="fw-bold text-dark">{{ $politicsNews ?? '10' }}</h6>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: {{ $politicsNewsPercent ?? 10 }}%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1">Sociedade</div>
                                        <h6 class="fw-bold text-dark">{{ $socialNews ?? '10' }}</h6>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: {{ $socialNewsPercent ?? 10 }}%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1">Arte e Cultura</div>
                                        <h6 class="fw-bold text-dark">{{ $cultureNews ?? '10' }}</h6>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: {{ $cultureNewsPercent ?? 10 }}%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Notícias Por Categoria] end -->

                <!-- [Leads Overview] end -->
                <!-- [Utilizadores ] start -->
                <div class="col-xxl-8">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Utilizadores do Sistema</h5>
                            <div class="card-header-action">
                                <div class="card-header-btn">
                                    <div data-bs-toggle="tooltip" title="Delete">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                            data-bs-toggle="remove"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Refresh">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                            data-bs-toggle="refresh"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                            data-bs-toggle="expand"> </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                        data-bs-offset="25, 25">
                                        <div data-bs-toggle="tooltip" title="Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body custom-card-action p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr class="border-b">
                                            <th scope="row">Utilizadores</th>
                                            <th>Função</th>
                                            <th class="text-end">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            @if ($user->image)
                                                                <img src="{{ url('img/users/' . $user->image) }}"
                                                                    alt=" User-Img" class="img-fluid" />
                                                            @else
                                                                <img src="{{ url('site/assets/img/user-2.png') }}"
                                                                    alt=" User-Img" class="img-fluid" />
                                                            @endif
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">{{ $user->name }}</span>
                                                            <span
                                                                class="fs-12 d-block fw-normal text-muted">{{ $user->email }}</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">{{ $user->role }}</span>
                                                </td>
                                                </td>
                                                <td class="text-end">
                                                    <a class="dropdown" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-item"><a
                                                                href="{{ route('admin.user.edit', ['user' => $user]) }}"><i
                                                                    class="feather-edit"></i> Editar</a></li>
                                                        <li class="dropdown-item"><a
                                                                href="{{ route('admin.user.delete', ['user' => $user]) }}"><i
                                                                    class="feather-trash-2"></i> Deletar</a></li>
                                                    </ul>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Nenhum utilizador encontrado.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{-- Paginação --}}
                            <div class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                {{ $users->links('vendor.dashPaginatio.index') }}
                            </div>
                            {{-- Fim de Paginação --}}
                        </div>
                    </div>
                </div>
                <!-- [Utilizadores ] end -->
                <!--! END: [Team Progress] !-->
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>

@endsection
