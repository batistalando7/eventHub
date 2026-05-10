<header class="th-header header-layout5 dark-theme">
    <div class="sticky-wrapper">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-2 d-none d-lg-inline-block">
                    <div class="header-logo">
                        <a href="/">
                            <img src="{{ url('site/assets/img/1-Photoroom.png') }}" alt="Assessorarte">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header-top">
                        <div class="row align-items-center">
                            <div class="col-xl-9">
                                <div class="news-area">
                                    <div class="title">Últimas Notícias :</div>
                                    <div class="news-wrap">
                                        <div class="row slick-marquee">
                                            @foreach ($breaknews as $topic)
                                                <div class="col-auto">
                                                    <a href="{{ route('site.newsView', ['news' => $topic->slug]) }}"
                                                        class="breaking-news">{{ $topic->title }}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 text-end d-none d-xl-block">
                                <div class="social-links">
                                    <span class="social-title">Siga-nos :</span>
                                    <a href="https://www.facebook.com">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.instagram.com">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com">
                                        <i class="fab fa-youtube"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-none d-xl-block">
                                <div class="toggle-icon">
                                    <a href="#" class="simple-icon sideMenuToggler">
                                        <i class="far fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto d-lg-none d-block">
                                <div class="header-logo">
                                    <a href="/">
                                        <img class="light-img" src="{{ url('site/assets/img/1-Photoroom.png') }}"
                                            alt="Assessorarte">
                                    </a>
                                    <a href="/" style="width: 10rem">
                                        <img class="dark-img" src="{{ url('site/assets/img/1-Photoroom.png') }}"
                                            alt="Assessorarte">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li>
                                            <a href="/">Home</a>
                                        </li>
                                        <li><a href="{{ route('site.policy') }}">Política</a></li>
                                        <li><a href="{{ route('site.society') }}">Sociedade</a></li>
                                        <li><a href="{{ route('site.economic') }}">Economia</a></li>
                                        <li><a href="{{ route('site.culture') }}">Artes & Cultura</a></li>
                                        <li><a href="{{ route('site.sports') }}">Desportos</a></li>
                                        {{-- <li class="menu-item-has-children">
                                            <a href="#">Desportos</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('portal.sports.index') }}"
                                                        rel="noopener noreferrer">Desporto Nacional</a>
                                                </li>

                                                <li><a href="https://www.abola.pt/internacional" target="_blank"
                                                        rel="noopener noreferrer">Desporto
                                                        Internacional</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="menu-item-has-children">
                                            <a href="#">Multimídia</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('site.publication') }}">Biblioteca Digital</a>
                                                </li>
                                                <li><a href="{{ route('site.videos') }}">Vídeos</a></li>
                                                <li><a href="{{ route('site.galery') }}">Imagens</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li><a href="#">Entrar</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <div class="header-button">
                                    <button type="button" class="simple-icon searchBoxToggler">
                                        <i class="far fa-search"></i>
                                    </button>
                                    <a href="contact.html" class="th-btn style3" style="opacity:0">Contacte-nos</a>
                                    <button type="button" class="th-menu-toggle d-block d-lg-none">
                                        <i class="far fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
