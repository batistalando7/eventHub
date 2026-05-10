@extends('layouts._admin.main')
@section('title', 'Assessorarte- Visualizar Notícia')
@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Notícias</h5>
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
                        <a href="{{ route('admin.news.edit', ['news' => $news]) }}" class="btn btn-icon btn-light-brand">
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
                        <a href="{{ route('admin.news.index') }}" class="btn btn-danger ">
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
        <!-- Main Content -->
        <div class="container my-4">
            <!-- News Image -->


            <!-- News Title and Subtitle -->
            <div class="mb-4">
                <h1 class="news-title">{{ $news->title }}</h1>
                <div class="news-subtitle">{{ $news->subtitle }}</div>

            </div>

            <div class="news-image-container">
                <a href="{{ asset('img/news/' . $news->image) }}">
                    <img src="{{ asset('img/news/' . $news->image) }}" alt="{{ $news->title }}"
                        class="news-image rounded shadow/">
                </a>

            </div>
            {{-- <div class="news-slug">{{ $news->slug }}</div> --}}

            <!-- News Information -->
            <div class="row">
                <!-- Basic Info -->
                <div class="col-md-12 mb-4">
                    <div class="info-card">
                        <h5><i class="fas fa-info-circle me-2"></i>Detalhes da Notícia</h5>

                        <div class="info-item">
                            <div class="info-label">Destaque:</div>
                            <div class="info-value">
                                @if ($news->detach == 'normal')
                                    <span class="badge bg-secondary">Normal</span>
                                @elseif($news->detach == 'destaque')
                                    <span class="badge bg-primary">Destaque</span>
                                @elseif($news->detach == 'urgente')
                                    <span class="badge bg-danger">Urgente</span>
                                @else
                                    <span class="badge bg-secondary">Normal</span>
                                @endif
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Estado:</div>
                            <div class="info-value">
                                @if ($news->status == 'rascunho')
                                    <span class="badge bg-warning">Rascunho</span>
                                @elseif($news->status == 'publicado')
                                    <span class="badge bg-success">Publicado</span>
                                @elseif($news->status == 'arquivado')
                                    <span class="badge bg-info">Arquivado</span>
                                @else
                                    <span class="badge bg-secondary">Desconhecido</span>
                                @endif
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Categoria:</div>
                            <div class="info-value">
                                <span class="category-badge">
                                    <i class="fas fa-tag"></i>
                                    {{ $news->category->name ?? 'Categoria não Identificada' }}
                                </span>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Data da Publicação:</div>
                            <div class="info-value">
                                <i class="fas fa-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($news->date)->format('d/m/Y') }}
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-label">Última Atualização:</div>
                            <div class="info-value">
                                <i class="fas fa-history me-1"></i>
                                {{ \Carbon\Carbon::parse($news->updated_at)->format('F j, Y \a\t g:i a') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- News Description -->
            <div class="description-container">
                <h5 class="mb-4"><i class="fas fa-align-left me-2"></i>Descrição da Notícia</h5>
                <div class="event-description">
                    {!! $news->description !!}
                </div>
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --success-color: #198754;
            --light-bg: #f8f9fa;
            --dark-bg: #212529;
            --border-color: #dee2e6;
        }

        .news-header {
            background-color: var(--light-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 1.5rem 0;
        }

        .news-image-container {
            height: 400px;
            overflow: hidden;
            border-radius: 0.5rem;
            margin-bottom: 0;
        }

        .news-image {
            width: 80%;
            height: 80%;
            object-fit: cover;
            justify-content: center;
            display: block;
            margin: 0 auto;
            border-radius: 0.5rem;
            transition: transform 0.3s ease;
        }

        .news-image-container:hover .news-image {
            transform: scale(1.03);
        }

        .news-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark-bg);
            margin: 2rem 2rem;
        }

        .news-subtitle {
            font-size: 1.25rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            margin: 0 1rem;
        }

        .news-slug {
            font-size: 1rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .info-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            padding: 1.5rem;
            margin-bottom: 0 1.5rem;
            height: 100%;
        }

        .info-card h5 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .info-item {
            margin-bottom: 1rem;
            display: flex;
        }

        .info-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--secondary-color);
        }

        .info-value {
            flex: 1;
        }

        .category-badge {
            background-color: rgba(25, 135, 84, 0.1);
            color: var(--success-color);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-block;
        }

        .description-container {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            padding: 2rem;
            margin-top: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .action-buttons {
            display: flex;
            gap: 0.75rem;
            justify-content: flex-end;
            margin-top: 1.5rem;
        }

        @media (max-width: 768px) {
            .news-title {
                font-size: 2rem;
            }

            .news-image-container {
                height: 300px;
            }

            .info-item {
                flex-direction: column;
            }

            .info-label {
                min-width: auto;
                margin-bottom: 0.25rem;
            }
        }
    </style>
@endsection
