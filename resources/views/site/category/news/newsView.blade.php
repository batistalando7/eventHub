@extends('layouts._site.main')
@section('title', 'Notícia Detalhada | Assessorarte')
@section('content')


    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Informações Detalhadas</li>
            </ul>
        </div>
    </div>
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12"><a data-theme-color="#019D9E" href="#"
                        class="category">{{ $news->category->name }}</a>
                    @if ($news->detach === 'premium')
                        <a data-theme-color="#DAA520" href="#" class="category">{{ $news->detach }}</a>
                    @endif
                    <h2 class="blog-title">{{ $news->title }}.</h2>
                    <h6>{{ $news->subtitle }}</h6>
                    <div class="blog-meta blogmeta">
                        <a class="author" href="#">
                            <i class="far fa-user"></i>{{ $news->font ?? 'Fonte desconhecida' }}
                        </a>
                        <a href="#">
                            <i class="fal fa-calendar-days"></i>{{ $news->updated_at->format('d M, Y') }}
                        </a>
                        <a href="#comments">
                            <i class="far fa-comments"></i> Comentários ({{ $news->comments->count() }})
                        </a>
                    </div>
                    <div class="blog-img mb-40 img-view">
                        <img src="{{ asset('/img/news/' . $news->image) }}" alt="Blog Image" class="fixed-img">
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-8">
                    <div class="th-blog blog-single">
                        <div class="blog-content-wrap">
                            <div class="share-links-wrap">
                                <div class="share-links"><span class="share-links-title">Pesquisar Posts:</span>
                                    <div class="multi-social">
                                        <a href="../../../../www.facebook.com/index.html"
                                            target="_blank"><i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="../../../../www.twitter.com/index.html" target="_blank"><i
                                                class="fab fa-twitter"></i>
                                        </a>
                                        {{-- <a href="../../../../www.linkedin.com/index.html" target="_blank"><i
                                                class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://pinterest.com/"
                                            target="_blank"><i class="fab fa-pinterest-p"></i>
                                        </a> --}}
                                        <a href="https://instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-info-wrap"><button class="blog-info print_btn">Imprimir :
                                        <i class="fas fa-print"></i></button>
                                </div>

                                {{-- Corpo da notícia --}}
                                @php
                                    use Illuminate\Support\Str;

                                    $fullHtml = $news->description ?? '';
                                    if (preg_match('/<p\b[^>]*>(.*?)<\/p>/is', $fullHtml, $m)) {
                                        $sampleHtml = $m[0];
                                    } else {
                                        $sampleHtml = nl2br(e(Str::limit(strip_tags($fullHtml), 400, '...')));
                                    }
                                @endphp

                                <div class="content">
                                    @if ($news->detach === 'premium' && !request()->cookie('subscribed'))
                                        {{-- Parte inicial com leve transparência --}}
                                        <div class="premium-sample">
                                            {!! $sampleHtml !!}
                                        </div>

                                        {{-- Mensagem de alerta logo abaixo --}}
                                        <div class="premium-alert text-center mt-3 p-3">
                                            <h5 class="mb-2">Conteúdo Premium</h5>
                                            <p class="mb-2">
                                                Para ler esta notícia deves estar <strong>subscrito</strong>.
                                            </p>
                                        </div>
                                    @else
                                        <div id="description">
                                            {{-- Conteúdo completo --}}
                                            {!! $news->description !!}
                                        </div>
                                    @endif
                                </div>

                                {{-- Fim de corte de notícia --}}

                                <div class="blog-tag">
                                    <h6 class="title">Etiquetas Comuns :</h6>
                                    <div class="tagcloud">
                                        @foreach ($tags1 as $tag)
                                            <a href="#">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Comentários --}}
                    <div class="th-comments-wrap" id="comments">
                        <h2 class="blog-inner-title h3">
                            {{ $news->comments->count() }} Comentário(s)
                        </h2>

                        {{-- Novo Comentário --}}
                        @if (request()->cookie('subscribed'))
                            <div class="comment-form-wrap mb-4">
                                <form action="{{ route('site.comment.store', $news->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="parent_id" value=""> {{-- comentário principal --}}

                                    <div class="mb-2 ">
                                        <textarea name="text_comment" class="form-control comment-textarea" rows="1"
                                            placeholder="Adicione um comentário..." required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-comment btn-sm p-2">Comentar</button>
                                </form>
                            </div>
                        @endif

                        {{-- Lista de comentários --}}
                        <ul class="comment-list">
                            @foreach ($news->comments->where('parent_id', null) as $comment)
                                <li class="th-comment-item mb-3">
                                    <div class="th-post-comment">
                                        <div class="avatar-placeholder">
                                            @if ($comment->image)
                                                <img src="{{ url('img/users/' . $comment->image) }}" alt="Foto do Autor"
                                                    class="img-fluid user-avtar me-0">
                                            @else
                                                <div class="avatar-placeholder {{ rand(0, 1) ? 'alt' : '' }}">
                                                    @if ($comment->subscription)
                                                        {{ strtoupper(substr($comment->subscription->email, 0, 1)) }}
                                                    @else
                                                        <img src="{{ url('img/users/' . $comment->subscription->image) }}"
                                                            alt="Foto do Autor" class="img-fluid user-avtar me-0">
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                        <div class="comment-content email-alinhado">
                                            <h3 class="name">
                                                @if ($comment->subscription)
                                                    {{ strstr($comment->subscription->email, '@', true) }}
                                                @else
                                                    Email não disponível
                                                @endif
                                                <span class="commented-on">
                                                    {{ $comment->created_at->diffForHumans() }}
                                                </span>
                                            </h3>
                                            <p class="text">{{ $comment->text_comment }}</p>
                                            <!-- Botão para abrir resposta -->
                                            @if (request()->cookie('subscribed'))
                                                <button class="btn btn-link btn-sm reply-toggle"
                                                    data-id="{{ $comment->id }}">
                                                    Responder
                                                </button>

                                                <!-- Formulário de resposta (escondido por padrão) -->
                                                <form action="{{ route('site.comment.store', $news->id) }}" method="POST"
                                                    class="mt-2 reply-form d-none" id="reply-form-{{ $comment->id }}">
                                                    @csrf
                                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                    <textarea name="text_comment" class="form-control mb-2" rows="2" placeholder="Responder..." required></textarea>
                                                    <button type="submit"
                                                        class="btn btn-comment btn-sm">Responder</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Respostas -->
                                    @if ($comment->replies->count())
                                        <button class="btn btn-link btn-sm toggle-replies" data-id="{{ $comment->id }}">
                                            Ver {{ $comment->replies->count() }} resposta(s)
                                        </button>
                                        <ul class="children d-none" id="replies-{{ $comment->id }}">
                                            @foreach ($comment->replies as $reply)
                                                <li class="th-comment-item">
                                                    <br>
                                                    <div class="th-post-comment">
                                                        <div class="avatar-placeholder">
                                                            @if ($comment->image)
                                                                <img src="{{ url('img/users/' . $comment->image) }}"
                                                                    alt="Foto do Autor" class="img-fluid user-avtar me-0">
                                                            @else
                                                                <div
                                                                    class="avatar-placeholder {{ rand(0, 1) ? 'alt' : '' }}">
                                                                    @if ($reply->subscription)
                                                                        {{ strtoupper(substr($reply->subscription->email, 0, 1)) }}
                                                                    @else
                                                                        <img src="{{ url('img/users/' . $reply->subscription->image) }}"
                                                                            alt="Foto do Autor"
                                                                            class="img-fluid user-avtar me-0">
                                                                    @endif
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="comment-content email-alinhado">
                                                            <h3 class="name">
                                                                @if ($reply->subscription)
                                                                    {{ $reply->subscription->email }} <span
                                                                        class="commented-on">
                                                                        {{ $reply->created_at->diffForHumans() }}
                                                                    </span>
                                                                @else
                                                                    Email não disponível
                                                                @endif
                                                            </h3>

                                                            <p class="text">{{ $reply->text_comment }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                        @if (!request()->cookie('subscribed'))
                            <div class="alert alert-warning mt-4">
                                Apenas <strong>subscritos</strong> podem comentar ou responder aos comentários.
                                <br>
                            </div>
                        @endif
                    </div>

                    {{-- Fim de comentários --}}



                    {{-- Postes Relacionados a categoria --}}
                    <div class="related-post-wrapper pt-30 mb-30">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="sec-title has-line">Postagem relacionada</h2>
                            </div>
                            <div class="col-auto">
                                <div class="sec-btn">
                                    <div class="icon-box">
                                        <button data-slick-prev="#related-post-slide" class="slick-arrow default">
                                            <i class="far fa-arrow-left"></i>
                                        </button>
                                        <button data-slick-next="#related-post-slide" class="slick-arrow default">
                                            <i class="far fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row slider-shadow th-carousel" id="related-post-slide" data-slide-show="3"
                            data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2">

                            @forelse ($Related as $related)
                                <div class="col-sm-6 col-xl-4">
                                    <div class="blog-style1">
                                        <div class="blog-img">
                                            <img src="{{ url('img/news/' . $related->image) }}" alt="blog image">
                                            <a data-theme-color="#00D084"
                                                href="{{ route('site.newsView', $related->slug) }}" class="category">
                                                {{ $related->category->name }}
                                            </a>
                                        </div>
                                        <h3 class="box-title-22">
                                            <a class="hover-line" href="{{ route('site.newsView', $related->slug) }}">
                                                {{ Str::limit($related->title, 30, '...') }}
                                            </a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="#"><i
                                                    class="far fa-user"></i>{{ $related->font ?? 'Fonte desconhecida' }}</a>
                                            <a href="#"><i class="fal fa-calendar-days"></i>
                                                {{ $related->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center my-5">
                                    <p class="alert alert-warning fs-5 py-4 px-5">
                                        Nenhuma postagem relacionada.
                                    </p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    {{-- Fim de Postes Relacionados a categoria --}}

                </div>
                {{-- Sessão de Postes Recentes & Tags Populatres --}}
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">

                        {{-- Sessão dos Posts Recentes --}}

                        @include('layouts._site.RecentPosts')

                        {{-- Fim de Sesssão dos Postes Recentes --}}
                        <br>
                        @foreach ($ads as $ad)
                            <div class="widget">
                                <div class="widget-ads"><a href="{{ $ad->link }}"><img class="w-100"
                                            src="{{ url('img/ads/' . $ad->image) }}" alt="ads"></a></div>
                            </div>
                        @endforeach
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Etiquetas</h3>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="#">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        {{-- Subscrição --}}
                        {{-- Subscrição --}}
                        @include('layouts._site.subscriptionInPages')
                        {{-- Fim de Subscrição --}}
                        {{-- Fim de Subscrição --}}
                    </aside>
                </div>
                {{-- Fim Sessão de Postes Recentes & Tags Populatres --}}
            </div>
        </div>
    </section>

@endsection
