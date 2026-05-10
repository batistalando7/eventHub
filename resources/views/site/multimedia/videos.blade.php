@extends('layouts._site.main')
@section('title', 'Videos | Assessorarte')
@section('content')

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="home-newspaper.html">Home</a></li>
                <li>Vídeos</li>
            </ul>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row gy-30 filter-active">
                        {{-- Loop de vídeos com fallback --}}
                        @forelse ($videosExpo as $item)
                            <div class="filter-item col-xl-4 col-sm-6">
                                <div class="blog-style1">
                                    <div class="blog-img">
                                        @if (strpos($item->url, 'youtube.com') !== false || strpos($item->url, 'youtu.be') !== false)
                                            @php
                                                // Extrair o ID do vídeo da URL
                                                preg_match(
                                                    '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                                    $item->url,
                                                    $matches,
                                                );
                                                $video_id = $matches[1] ?? null;
                                            @endphp

                                            @if ($video_id)
                                                <iframe width="100%" height="220"
                                                    src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            @else
                                                <p class="text-danger">⚠️ Vídeo não encontrado.</p>
                                            @endif
                                        @else
                                            <video width="100%" height="220" controls>
                                                <source src="{{ $item->url }}" type="video/mp4">
                                                Seu navegador não suporta o elemento de vídeo.
                                            </video>
                                        @endif
                                    </div>

                                    <h3 class="box-title-20">
                                        <a href="#" class="hover-line">
                                            {{ Str::limit($item->title, 20, '...') }}
                                        </a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="#"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="#"><i
                                                class="fal fa-calendar-days"></i>{{ $item->created_at->format('d M, Y') }}</a>
                                    </div>
                                </div>
                            </div>
                        @empty

                            <p>
                                Nenhum vídeo disponível no momento.
                            </p>

                        @endforelse
                    </div>

                    {{-- Botão "Ver Mais" só aparece se houver publicações --}}
                    <div class="th-pagination mt-40">
                        {{ $videosExpo->links('vendor.pagination.custom') }}
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
