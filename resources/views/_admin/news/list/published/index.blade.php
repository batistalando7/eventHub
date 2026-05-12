@extends('layouts._admin.main')

@section('title', 'Assessorarte- Listar Notícia')

@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Notícias</h5>
                </div>
                <ul class="breadcrumb">
                    @can('is-admin')
                        <li class="breadcrumb-item">

                            <a href="/admin">Home</a>

                        </li>
                    @endcan
                    <li class="breadcrumb-item">Listagem</li>
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
                        <div class="dropdown">
                            <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 12"
                                data-bs-auto-close="outside">
                                <i class="feather-paperclip"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="/" class="dropdown-item">
                                    <i class="bi bi-filetype-pdf me-3"></i>
                                    <span>PDF</span>
                                </a>
                            </div>
                        </div>
                        <a href="{{ route('admin.news.create') }}" class="btn btn-danger">
                            <i class="feather-plus me-2"></i>
                            <span>Nova Notícia</span>
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
        <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
            <div class="accordion-body pb-2">
                <div class="row">
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Paid</span>
                                        <span class="fs-20 fw-bold d-block">78/100</span>
                                    </a>
                                    <div class="progress-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Unpaid</span>
                                        <span class="fs-20 fw-bold d-block">38/50</span>
                                    </a>
                                    <div class="progress-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Overdue</span>
                                        <span class="fs-20 fw-bold d-block">15/30</span>
                                    </a>
                                    <div class="progress-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Draft</span>
                                        <span class="fs-20 fw-bold d-block">3/10</span>
                                    </a>
                                    <div class="progress-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover" id="proposalList">
                                    <thead>
                                        <tr>
                                            <th class="wd-30">
                                                <div class="btn-group mb-1">
                                                    <div class="custom-control custom-checkbox ms-1">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="checkAllProposal">
                                                        <label class="custom-control-label" for="checkAllProposal"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Imagem</th>
                                            <th>Título da Notícia</th>
                                            {{-- <th>Slug</th> --}}
                                            {{-- <th>Subtítulo da Notícia</th> --}}
                                            <th>Destaque</th>
                                            <th>Status</th>
                                            <th>Data de Públicação</th>
                                            {{-- <th>Descrição</th> --}}
                                            <th class="text-end">Ação</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @foreach ($news as $news)
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_1">
                                                            <label class="custom-control-label" for="checkBox_1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $news->id }} </td>
                                                <td>
                                                    <a href="{{ route('admin.news.view', ['news' => $news]) }}"
                                                        class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            @if ($news->image)
                                                                <a href="{{ asset('storage/' . $news->image) }}"> <img
                                                                        src="{{ asset('storage/' . $news->image) }}"
                                                                        alt="News Image" class="img-thumbnail"
                                                                        style="max-width: 50px; max-height: 50px;"></a>
                                                            @else
                                                                <i class="feather-image"></i>
                                                            @endif
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>{{ Str::limit($news->title, 20, '...') }}</td>
                                                {{-- <td>
                                                    <div class="hstack gap-2">
                                                        {{ Str::limit($news->slug, 20, '...') }}
                                                    </div>
                                                </td> --}}
                                                {{-- <td>{{ Str::limit($news->subtitle, 20, '...') }}</td> --}}
                                                <td>{{ $news->detach }}</td>
                                                <td>
                                                    {{ $news->status }}
                                                </td>
                                                <td>
                                                    {{ $news->date }}
                                                </td>
                                                {{-- <td>
                                                    {{ $news->description }}
                                                </td> --}}
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a class="avatar-text avatar-md"
                                                            href="{{ route('admin.news.view', ['news' => $news]) }}">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('admin.news.edit', ['news' => $news]) }}">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                @can('is-editor')
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('admin.news.delete', ['news' => $news]) }}">
                                                                            <i class="feather feather-trash-2 me-3"></i>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </li>
                                                                @endcan

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
