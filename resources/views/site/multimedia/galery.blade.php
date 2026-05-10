@extends('layouts._site.main')
@section('title', 'Galeria de Fotos | Assessorarte')
@section('content')
    <link rel="stylesheet" href="{{ url('flipbook/assets/style.css') }}">

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="home-newspaper.html">Home</a></li>
                <li>Galeria</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row gy-30 filter-active">
                        {{-- Loop de galerias com fallback --}}
                        @forelse ($galeries as $item)
                            <div class="filter-item col-xl-4 col-sm-6">
                                <div class="blog-style1">
                                    <div class="blog-img img-size">
                                        <a class="hover-line" data-bs-toggle="modal"
                                            data-bs-target="#modalGalery{{ $item->id }}" id="img">
                                            <img class="rounded"
                                                @if (!empty($item->images)) src="{{ asset('img/galeries/' . $item->images[0]) }}"
                                                @else
                                                    src="{{ asset('img/galeries/pdfimg.png') }}"
                                                    alt="{{ $item->title }}"> @endif
                                                </a>
                                    </div>

                                    <h3 class="box-title-20">
                                        <a class="hover-line" data-bs-toggle="modal"
                                            data-bs-target="#modalGalery{{ $item->id }}" id="img">
                                            {{ Str::limit($item->title, 20, '...') }}
                                        </a>
                                    </h3>

                                    <div class="blog-meta">
                                        <a href="#">
                                            <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- Inicio do modal --}}
                            <div class="modal fade" id="modalGalery{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $item->id }}">
                                                {{ $item->title }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row justify-content-center mb-4">
                                                <div class="col-md-10">
                                                    @if (!empty($item->images))
                                                        @include('components.carrossel-galery', [
                                                            'item' => $item,
                                                        ])
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Descrição -->
                                            <div class="description-galery mt-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><strong>Título:</strong>
                                                        {{ $item->title }}</li>
                                                    <li class="list-group-item"><strong>Data:</strong>
                                                        {{ $item->updated_at->format('d M, Y') }}</li>
                                                    <li class="list-group-item"><strong>Descrição:</strong>
                                                        {{ $item->description ?? 'N/A' }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- fim do modal --}}
                        @empty
                            <p>
                                Nenhuma galeria disponível no momento.
                            </p>
                        @endforelse
                    </div>

                    {{-- Botão "Ver Mais" só aparece se houver imagens --}}
                    <div class="th-pagination mt-40">
                        {{ $galeries->links('vendor.pagination.custom') }}
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

                        {{-- Fim das Tags Populares --}}

                        {{-- Subscrição --}}

                        @include('layouts._site.subscriptionInPages')

                        {{-- Fim de Subscrição --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <script>
        function take() {
            let id = document.querySelector('#galeryId').value
            window.alert(id);
        }
    </script>
@endsection
