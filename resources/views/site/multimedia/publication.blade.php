@extends('layouts._site.main')
@section('title', 'Biblioteca Digital | Assessorarte')
@section('content')

    <link rel="stylesheet" href="{{ url('flipbook/assets/style.css') }}">

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="home-newspaper.html">Home</a></li>
                <li>Biblioteca Digital</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row gy-30 filter-active">
                        @if ($publications)
                            @forelse ($publications as $item)
                                <div class="filter-item col-xl-4 col-sm-6">
                                    <div class="blog-style1">
                                        <div class="blog-img img-size">
                                            <a class="hover-line openModalBtn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal" data-title="{{ $item->title }}"
                                                data-file="{{ asset('files/publication/' . $item->file) }}">
                                                <img src="{{ $item->cover ? asset('img/publication/' . $item->cover) : asset('img/publication/pdfimg.png') }}"
                                                    alt="blog image">
                                            </a>
                                        </div>
                                        <h3 class="box-title-20">
                                            <a class="hover-line openModalBtn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal" data-title="{{ $item->title }}"
                                                data-file="{{ asset('files/publication/' . $item->file) }}">
                                                {{ $item->title }}
                                            </a>
                                        </h3>
                                        <a href="{{ asset('files/publication/' . $item->file) }}"
                                            class="btn btn-sm btn-light" download>
                                            <i class="fas fa-file-pdf me-1"></i> Baixar PDF
                                        </a>
                                    </div>
                                </div>
                            @empty

                                <p>
                                    Nenhum pdf disponível no momento.
                                </p>
                            @endforelse
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                <div class="modal-content bg-dark text-light">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Carregando...</h1>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <div id="book" class="book mx-auto"></div>
                                        <div class="mt-3 d-flex justify-content-center align-items-center gap-2">
                                            <button class="btn btn-warning" id="prev-page">Anterior</button>
                                            <input type="text" id="page-number"
                                                style="background-color:#000000b0; color:#fff; border:none; width:150px; text-align:center;"
                                                readonly>
                                            <button class="btn btn-warning" id="next-page">Próxima</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Botão "Ver Mais" só aparece se houver publicações --}}
                    <div class="th-pagination mt-40">
                        {{ $publications->links('vendor.pagination.custom') }}
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        {{-- Sessão de categorias --}}

                        @include('layouts._site.categoryPages')

                        {{-- Fim de Sessão de categorias --}}
                        {{-- Sessão dos Posts Recentes --}}

                        @include('layouts._site.RecentPosts')

                        {{-- Fim de Sesssão dos Postes Recentes --}}
                        <br>
                        {{-- Publicidades --}}

                        @include('layouts._site.Ads')

                        {{-- Fim das Publicidades --}}
                        {{-- Tags Populares --}}

                        @include('layouts._site.PopularTags')

                        {{-- Subscrição --}}

                        @include('layouts._site.subscriptionInPages')

                        {{-- Fim de Subscrição --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>


@endsection
