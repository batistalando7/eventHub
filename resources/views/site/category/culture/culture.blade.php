@extends('layouts._site.main')
@section('title', 'Cultura | Assessorarte')
@section('content')

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Culturas</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                {{-- Listagem das Categotias  --}}
                <div class="col-xxl-9 col-lg-8">
                    <div class="mb-30">
                        @if ($news->count())
                            @foreach ($news as $item)
                                <div class="border-blog2">
                                    <div class="blog-style4">
                                        <div class="blog-img w-386 img-card-policy">
                                            <img src="{{ asset('/img/news/' . $item->image) }}" alt="blog image" />
                                        </div>
                                        <div class="blog-content">
                                            @foreach ($categories as $category)
                                                @if ($item->category_id == $category->id)
                                                    <a data-theme-color="#FF9500" href="#"
                                                        class="category">{{ $category->name }}</a>
                                                @endif
                                            @endforeach
                                            <h3 class="box-title-30">
                                                <a class="hover-line"
                                                    href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ Str::limit($item->title, 50) }}</a>
                                            </h3>
                                            <p class="blog-text">{{ Str::limit($item->subtitle, 100) }}</p>
                                            <div class="blog-meta">
                                                <a href="#"><i class="far fa-user"></i>{{ $item->author }}</a>
                                                <a href="#"><i
                                                        class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}</a>
                                            </div>
                                            <a href="{{ route('site.newsView', ['news' => $item->slug]) }}"
                                                class="th-btn style2">Ver mais<i class="fas fa-arrow-up-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Nenhuma notícia encontrada em Artes & Cultura.</p>
                        @endif
                    </div>
                    {{-- Paginação --}}
                    <div class="th-pagination mt-40">
                        {{ $news->links('vendor.pagination.custom') }}
                    </div>
                    {{-- Fim de Paginação --}}
                </div>
                {{-- Fim da listagem  --}}
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        {{-- Pesquisa por Tag(Etiquetas)/Palavras-chaves --}}
                        <div class="widget widget_search">
                            <form class="search-form" action="{{ route('news.search') }}" method="GET">
                                <input type="text" name="q" placeholder="Palavra-chave/Tag(Etiqueta)"
                                    value="{{ request('q') }}" />
                                <button type="submit">
                                    <i class="far fa-search"></i>
                                </button>
                            </form>
                        </div>
                        {{-- Fim da div de pesquisa --}}
                        {{-- Sessão de categorias - Links --}}
                        {{-- Sessão de categorias --}}

                        @include('layouts._site.categoryPages')

                        {{-- Fim de Sessão de categorias --}}
                        {{-- Fim de Sessão das Categorias - Links --}}

                        {{-- Sessão dos Posts Recentes --}}

                        @include('layouts._site.RecentPosts')

                        {{-- Fim de Sesssão dos Postes Recentes --}}

                        {{-- Publicidades --}}
                        <br>
                        {{-- Publicidades --}}

                        @include('layouts._site.Ads')

                        {{-- Fim das Publicidades --}} {{-- Tags das Categorias --}}
                        {{-- Tags Populares --}}

                        @include('layouts._site.PopularTags')

                        {{-- Fim das Tags Populares --}}
                        {{-- Fim das Tags de Categoria --}}
                        {{-- Subscrição --}}
                        {{-- Subscrição --}}
                        @include('layouts._site.subscriptionInPages')
                        {{-- Fim de Subscrição --}}
                        {{-- Fim de Subscrição --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
