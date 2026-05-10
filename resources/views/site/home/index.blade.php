@extends('layouts._site.popupSubscribe')
@extends('layouts._site.main')
@section('title', 'Home | Assessorarte')
@section('content')
    {{-- Sessão dos noticias da categoria Politica com mais destaque e as mais recentes --}}

    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1"
            data-adaptive-height="true">

            @forelse ($newsDetach as $item)
                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-overlay="black" data-opacity="6"
                        data-bg-src="{{ url('img/news/' . $item->image) }}">
                    </div>
                    <div class="container">
                        <div class="blog-bg-style1">
                            @foreach ($categories as $category)
                                @if ($category->id == $item->category_id)
                                    <a data-theme-color="#6234AC" href="#" class="category">
                                        {{ $category->name }}</a>
                                @endif
                            @endforeach
                            <br>
                            <h3 data-ani="slideinup" data-ani-delay="0.3s" class="box-title-50">
                                <a class="hover-line"
                                    href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ $item->title }}</a>
                            </h3>
                            <div class="blog-meta" data-ani="slideinup" data-ani-delay="0.5s">
                                <a href="#">
                                    <i class="far fa-user"></i>{{ $item->font ?? 'Fonte desconhecida' }}
                                </a>
                                <a href="#">
                                    <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                </a>
                            </div>
                            <p class="blog-text" data-ani="slideinup" data-ani-delay="0.7s">{{ $item->subtitle }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="th-hero-bg" data-overlay="black" data-opacity="6">
                    <img src="{{ url('site/assets/img/fixo.jpg') }}" alt="Image" style="width: 100%; height: 30rem;">
                </div>
            @endforelse
        </div>

        {{-- Carrossel de Imagens --}}
        <div class="hero-tab-area">
            <div class="container">
                <div class="hero-tab" data-asnavfor=".hero-slider-1">
                    @forelse ($newsDetach as $item)
                        <div class="tab-btn active img-detach">
                            <img src="{{ asset('img/news/' . $item->image) }}" alt="Image">
                        </div>
                    @empty
                        <div class="tab-btn active img-detach">
                            <img src="{{ url('site/assets/img/fixo.jpg') }}" alt="Image">
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        {{-- Fim de Carrossel de Imagem --}}
    </div>
    {{-- Fim de Sessão dos noticias da categoria Politica com mais destaque e as mais recentes --}}

    <!-- ==================== noticias por categoria  ==================== -->
    <div class="space-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="sec-title has-line">Notícias por Categoria</h2>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slick-prev="#blog-slide7" class="slick-arrow default">
                                <i class="far fa-arrow-left"></i>
                            </button>
                            <button data-slick-next="#blog-slide7" class="slick-arrow default">
                                <i class="far fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Carrossel da Sessão Noticia por categoria --}}
            <div class="row th-carousel" id="blog-slide7" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2">

                @forelse ($news as $key => $item )
                    <div class="col-sm-4 col-lg-2 col-xl-1 dark-theme respo {{ $key == 0 ? 'active' : '' }}">
                        <div class="blog-style3">
                            <div class="blog-img img-card">
                                <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content respo">
                                @foreach ($categories as $category)
                                    @if ($category->id == $item->category_id)
                                        <a data-theme-color="#6234AC" href="#" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20 titlenews">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ Str::limit($item->title, 35) }}</a>
                                </h3>
                                <div class="blog-meta fontnews">
                                    <a href="#">
                                        <i class="far fa-user"></i>{{ $item->font ?? 'Fonte desconhecida' }}
                                    </a>
                                    <div class="time">
                                        <a href="#">
                                            <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center my-5">
                        <p class="alert alert-warning fs-6 py-3 px-0">
                            Nenhuma noticia recente por categoria disponível.
                        </p>
                    </div>
                @endforelse

            </div>

        </div>
    </div>
    {{-- Fim de noticias por categoria --}}

    <!-- ==================== Publicidade ==================== -->
    @foreach ($ads as $ad)
        <div class="container space-top img-ads">
            <a href="{{ $ad->link }}" target="_blank" class="ads-style1">
                <img class="light-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
                <img class="dark-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
            </a>
        </div>
    @endforeach
    {{-- Fim de Publicidade --}}

    <!-- ==================== Today News Section ==================== -->
    <section class="space">
        <div class="container">
            <h2 class="sec-title has-line">Notícias de Hoje</h2>
            <div class="row">
                <div class="col-xl-3">
                    <div class="row gy-4">
                        {{-- Noticia de hoje as mais recentes --}}
                        @forelse ($today as $key => $item)
                            <div class="col-xl-12 col-sm-6" {{ $key == 0 ? 'active' : '' }}>
                                <div class="blog-style1">
                                    <div class="blog-img img-today">
                                        <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $item->category_id)
                                                <a data-theme-color="#6234AC" href="#" class="category">
                                                    {{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                    <h3 class="box-title-22">
                                        <a class="hover-line"
                                            href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ Str::limit($item->title, 45) }}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="#">
                                            <i class="far fa-user"></i>{{ $item->font ?? 'Fonte desconhecida' }}
                                        </a>
                                        <a href="#">
                                            <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center my-5">
                                <p class="alert alert-warning fs-6 py-3 px-0">
                                    Nenhuma noticia recente.
                                </p>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-xl-9 mt-4 mt-xl-0">
                    <div class="dark-theme space-40">
                        {{-- noticia de hoje em destaque --}}
                        @if ($today1)
                            <div class="blog-style3">
                                <div class="blog-img img-big1">
                                    <img src="{{ asset('img/news/' . $today1->image) }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    @foreach ($categories as $category)
                                        @if ($category->id == $today1->category_id)
                                            <a data-theme-color="#6234AC" href="#" class="category">
                                                {{ $category->name }}</a>
                                        @endif
                                    @endforeach
                                    <h3 class="box-title-40">
                                        <a class="hover-line"
                                            href="{{ route('site.newsView', ['news' => $today1->slug]) }}">{{ Str::limit($today1->title, 45) }}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="#">
                                            <i class="far fa-user"></i>{{ $today1->font ?? 'Fonte desconhecida' }}
                                        </a>
                                        <a href="#">
                                            <i
                                                class="fal fa-calendar-days"></i>{{ $today1->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12 text-center my-5">
                                <p class="alert alert-warning fs-6 py-3 px-0">
                                    Nenhuma noticia em destaque.
                                </p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Fim das Noticia de Hoje --}}

    {{-- =================== Video de exposição ==================== --}}
    <section id="video-section" class="bg-fixed dark-theme" data-overlay="black" data-opacity="7">
        <div class="container-fluid px-0">
            <div class="row justify-content-center gx-0">
                @isset($videos)
                    <div class="col-12">
                        <div class="video-container">
                            <iframe id="video-frame" src="{{ $videos->embed_url }}?mute=1&autoplay=0&enablejsapi=1"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </section>
    {{-- ================= Fim de Video de exposição =============== --}}

    <!-- ==================== Algumas Categorias ==================== -->
    <section class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="sec-title has-line">Categorias de Notícias</h2>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="filter-menu filter-menu-active">
                            <button data-filter="*" class="tab-btn active" type="button">Todas</button>
                            <button data-filter=".cat1" class="tab-btn" type="button">Políticas</button>
                            <button data-filter=".cat2" class="tab-btn" type="button">Arets & Cultura</button>
                            <button data-filter=".cat3" class="tab-btn" type="button">Desporto</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-24 filter-active mbn-24">
                {{-- Noticia de destaque - todas as categorias que constão nessa sessão --}}
                @if ($today1)
                    <div class="col-xl-4 col-md-6 filter-item cat1">
                        <div class="blog-style3 dark-theme">
                            <div class="blog-img img-general">
                                <img src="{{ asset('img/news/' . $today1->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $today1->category_id)
                                        <a data-theme-color="#6234AC" href="#" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-24">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $today1->slug]) }}">{{ Str::limit($today1->title, 45) }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="far fa-user"></i>{{ $today1->font ?? 'Fonte desconhecida' }}
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-calendar-days"></i>{{ $today1->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Fim de Notia de Cateforia --}}

                {{-- Categoria Politica --}}
                @foreach ($newsPolicy as $item)
                    <div class="col-xl-4 col-md-6 filter-item cat1">
                        <div class="blog-style2">
                            <div class="blog-img img-big img-allnews">
                                <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $item->category_id)
                                        <a data-theme-color="#6234AC" href="#" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line" href="{{ route('site.newsView', ['news' => $item->slug]) }}">
                                        {{ Str::limit($item->title, 45) }}
                                    </a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Fim de Categoria Politica --}}

                {{-- Categoria de Cultura - trás 6 categotias da cultura --}}
                @foreach ($newsCulture as $item)
                    <div class="col-xl-4 col-md-6 filter-item cat2">
                        <div class="blog-style2">
                            <div class="blog-img img-big img-allnews">
                                <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $item->category_id)
                                        <a data-theme-color="#6234AC" href="#" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line" href="{{ route('site.newsView', ['news' => $item->slug]) }}">
                                        {{ Str::limit($item->title, 45) }}
                                    </a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Fim de Categoria de Cultura --}}

                {{-- News Sports --}}
                @foreach ($newsSports as $item)
                    <div class="col-xl-4 col-md-6 filter-item cat3">
                        <div class="blog-style2">
                            <div class="blog-img img-big img-allnews">
                                <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $item->category_id)
                                        <a data-theme-color="#6234AC" href="#" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line" href="{{ route('site.newsView', ['news' => $item->slug]) }}">
                                        {{ Str::limit($item->title, 45) }}
                                    </a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="#">
                                        <i class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Fim de News Sports --}}
            </div>
        </div>
    </section>
    <!-- ==================== Fim de Algumas Categorias ==================== -->

    {{-- =================== Sessão de Tecnologia, Economia e Sociedade ================== --}}
    <section class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h2 class="sec-title has-line">Ciências & Tecnologias</h2>
                    {{-- Noticia de Ciências e Tecnologia com destaque --}}
                    @if ($newsTech1)
                        <div class="mb-4">
                            <div class="dark-theme img-overlay2 space-40">
                                <div class="blog-style3">
                                    <div class="blog-img img-tech1">
                                        <img src="{{ asset('img/news/' . $newsTech1->image) }}"
                                            alt="{{ $newsTech1->title }}">
                                    </div>
                                    <div class="blog-content">
                                        <a data-theme-color="#6234AC"
                                            href="{{ route('site.newsCategory', $newsTech1->category->id) }}"
                                            class="category">
                                            {{ $newsTech1->category->name }}
                                        </a>
                                        <h3 class="box-title-40">
                                            <a class="hover-line" href="{{ route('site.newsView', $newsTech1->id) }}">
                                                {{ Str::limit($newsTech1->title, 85) }}
                                            </a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="#">
                                                <i class="far fa-user"></i> {{ $newsTech1->font ?? 'Fonte desconhecida' }}
                                            </a>
                                            <a href="#">
                                                <i class="fal fa-calendar-days"></i>
                                                {{ $newsTech1->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12 text-center my-5">
                            <p class="alert alert-warning fs-6 py-3 px-0">
                                Nenhuma noticia em destaque.
                            </p>
                        </div>
                    @endif
                    {{-- Fim de Noticia de Ciências e Tecnologia com destaque --}}

                    {{-- Noticia de Ciências e Tecnologia exibindo as 4 mais recentes --}}
                    <div class="row gy-4">
                        @forelse ($newsTech as $item)
                            <div class="col-md-6">
                                <div class="blog-style2">
                                    <div class="blog-img img-tech">
                                        <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                                    </div>
                                    <div class="blog-content">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $item->category_id)
                                                <a data-theme-color="#6234AC" href="#" class="category">
                                                    {{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                        <h3 class="box-title-20">
                                            <a class="hover-line"
                                                href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ Str::limit($item->title, 50) }}</a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="#">
                                                <i
                                                    class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center my-5">
                                <p class="alert alert-warning fs-6 py-3 px-0">
                                    Nenhuma noticia recente.
                                </p>
                            </div>
                        @endforelse
                    </div>
                    {{-- Fim de Noticias de Ciencias e Tecnologia exibindo as 4 mais recentes --}}

                    {{-- Publicidade - está acima da sessão de categoria de Economia --}}
                    @foreach ($ads as $ad)
                        <div class="space mt-40 mb-40 img-ads1">
                            <a href="{{ $ad->link }}" target="_blank" class="ads-style1">
                                <img class="w-100 light-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
                                <img class="w-100 dark-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
                            </a>
                        </div>
                    @endforeach
                    {{-- Fim de Publicidade --}}

                    {{-- Sessão de Economia e Negócio --}}
                    <h2 class="sec-title has-line">Economia & Negócio</h2>
                    <div class="mbn-24">
                        @forelse ($Economic as $item)
                            <div class="mb-4">
                                <div class="blog-style4">
                                    <div class="blog-img w-270">
                                        <img src="{{ url('img/news/' . $item->image) }}" alt="blog image">
                                    </div>
                                    <div class="blog-content">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $item->category_id)
                                                <a data-theme-color="#6234AC" href="#" class="category">
                                                    {{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                        <h3 class="box-title-22">
                                            <a class="hover-line"
                                                href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ $item->title }}</a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="#">
                                                <i class="far fa-user"></i>{{ $item->font ?? 'Fonte desconhecida' }}
                                            </a>
                                            <a href="#">
                                                <i
                                                    class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                        <a href="{{ route('site.newsView', ['news' => $item->slug]) }}"
                                            class="th-btn style2">Ler mais<i class="fas fa-arrow-up-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center my-5">
                                <p class="alert alert-warning fs-6 py-3 px-0">
                                    Nenhuma noticia recente.
                                </p>
                            </div>
                        @endforelse
                    </div>
                    {{-- Fim da sessão de Economia e Negocio --}}
                </div>
                <div class="col-xl-4 mt-35 mt-xl-0 sidebar-wrap mb-10">
                    <div class="sidebar-area">
                        {{-- Publicidade ; está acima da sessão de categoria de sociedade --}}
                        @foreach ($ads as $ad)
                            <div class="widget mb-40 img-ads2">
                                <div class="widget-ads">
                                    <a href="{{ $ad->link }}" target="_blank" class="ads-style1">
                                        <img class="w-100 light-img" src="{{ asset('img/ads/' . $ad->image) }}"
                                            alt="ads">
                                        <img class="w-100 dark-img" src="{{ asset('img/ads/' . $ad->image) }}"
                                            alt="ads">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- Fim da Publicidade --}}

                        {{-- Sessão de Sociedade --}}
                        <div class="widget">
                            <h2 class="sec-title fs-20 has-line">Sociedade</h2>
                            <div class="row gy-4">
                                @forelse ($Society as $item)
                                    <div class="col-xl-12 col-md-6">
                                        <div class="blog-style2">
                                            <div class="blog-img img-society">
                                                <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                                            </div>
                                            <div class="blog-content">
                                                @foreach ($categories as $category)
                                                    @if ($category->id == $item->category_id)
                                                        <a data-theme-color="#6234AC" href="#" class="category">
                                                            {{ $category->name }}</a>
                                                    @endif
                                                @endforeach
                                                <h3 class="box-title-20">
                                                    <a class="hover-line"
                                                        href="{{ route('site.newsView', ['news' => $item->slug]) }}">{{ Str::limit($item->title, 50) }}</a>
                                                </h3>
                                                <div class="blog-meta">
                                                    <a href="#">
                                                        <i
                                                            class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center my-5">
                                        <p class="alert alert-warning fs-6 py-3 px-0">
                                            Nenhuma noticia recente.
                                        </p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        {{-- Fim da sessão de Sociedade --}}

                        {{-- Subscrição --}}
                        @if (!request()->cookie('subscribed'))
                            <div class="widget newsletter-widget3"
                                data-bg-src="{{ url('site/assets/img/bg/line_bg_1.png') }}">
                                <div class="mb-4">
                                    <img src="{{ url('site/assets/img/bg/newsletter_img_2.png') }}" alt="Icon">
                                </div>
                                <h3 class="box-title-24 mb-20">Subscreve-se para receberes as atualizações das notícia em
                                    dastaque direitamente no seu email.</h3>
                                {{-- <form id="subscribeForm" class="newsletter-form"
                                    data-action="{{ route('subscribe.store') }}">
                                    @csrf
                                    @include('form._formSubscription.index')
                                </form> --}}

                                <div id="subscribeMessage" class="mt-2"></div>
                            </div>
                        @endif
                        {{-- Fim de Subscrição --}}
                    </div>
                </div>
            </div>
            {{-- =================== Fim de Sessão de Tecnologia, Economia e Sociedade ================== --}}
        </div>
    </section>
    {{-- =================== Fim de Sessão de Tecnologia, Economia e Sociedade ================== --}}
@endsection
