@extends('layouts._admin.main')

@section('title', 'Assessorarte - Notícias em Rascunho')

@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Notícias em Rascunho</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">Rascunho</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="{{ route('admin.news.create') }}" class="btn btn-danger">
                            <i class="feather-plus me-2"></i>
                            <span>Nova Notícia</span>
                        </a>
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
                                            <th>Título</th>
                                            <th>Destaque</th>
                                            <th>Status</th>
                                            <th>Data de Publicação</th>
                                            <th class="text-end">Ação</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($draftNews as $news)
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_{{ $news->id }}">
                                                            <label class="custom-control-label"
                                                                for="checkBox_{{ $news->id }}"></label>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>{{ $news->id }}</td>

                                                <td>
                                                    <a href="{{ route('admin.news.view', ['news' => $news]) }}"
                                                        class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            @if ($news->image)
                                                                <a href="{{ asset('img/news/' . $news->image) }}">
                                                                    <img src="{{ asset('img/news/' . $news->image) }}"
                                                                        alt="News Image" class="img-thumbnail"
                                                                        style="max-width:50px; max-height:50px;">
                                                                </a>
                                                            @else
                                                                <i class="feather-image"></i>
                                                            @endif
                                                        </div>
                                                    </a>
                                                </td>

                                                <td>{{ Str::limit($news->title, 40, '...') }}</td>

                                                <td>{{ $news->detach }}</td>

                                                <td>
                                                    <span
                                                        class="badge bg-secondary text-capitalize">{{ $news->status }}</span>
                                                </td>

                                                <td>
                                                    {{-- Se a coluna for timestamp created_at use created_at, se for campo date use date --}}
                                                    @if (isset($news->date))
                                                        {{ \Carbon\Carbon::parse($news->date)->format('d/m/Y') }}
                                                    @elseif(isset($news->created_at))
                                                        {{ $news->created_at->format('d/m/Y') }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>

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
                                                                        <a class="dropdown-item text-danger"
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
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center text-muted py-4">
                                                    Não existem notícias em Rascunho no momento.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                            </div>

                            {{-- Paginação --}}
                            <div class="p-3">
                                {{ $draftNews->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
