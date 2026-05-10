<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.png">
    <div class="widget-area">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="/">
                                    <img src="{{ url('site/assets/img/1-Photoroom.png') }}" alt="Tnews">
                                </a>
                            </div>
                            <p class="about-text">
                                O projeto Assessorarte consiste no desenvolvimento
                                de um portal de notícias digital,
                                voltado para a divulgação de informações de forma clara,
                                acessível e dinâmica
                            </p>
                            <div class="th-social style-black">
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.whatsapp.com">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Categorias</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @foreach ($footerCategory as $dados)
                                    <li><a href="#">{{ $dados->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Links mais usados - Menu --}}
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">links Uteis</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="https://www.jornaldeangola.ao/" target="_blank">Jornal de Angola</a></li>
                                <li><a href="https://platinaline.com/" target="_blank">PlatinaLine</a></li>
                                <li><a href="https://mercado.co.ao/" target="_blank">Jornal Mercado</a></li>
                                <li><a href="#">Radar Economico</a></li>
                                <li><a href="#">Eco Feminino</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Fim de Linkes mais usados - Menu --}}
                {{-- Postagens recentes --}}
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Posts Recentes</h3>
                        <div class="recent-post-wrap">
                            @foreach ($Recent as $recent)
                                <div class="recent-post img-footer">
                                    <div class="media-img img-footer">
                                        <a href="{{ route('site.newsView', ['news' => $recent->slug]) }}">
                                            <img src="{{ asset('img/news/' . $recent->image) }}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line"
                                                href="{{ route('site.newsView', ['news' => $recent->slug]) }}">{{ Str::limit($recent->title, 45) }}</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="#">
                                                <i
                                                    class="fal fa-calendar-days"></i>{{ $recent->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- Fim de postagem Recentes --}}
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row jusity-content-between align-items-center">
                <div class="col-lg-5">
                    <p class="copyright-text">Copyright
                        <i class="fal fa-copyright"></i> 2025 <a href="/">Assessorarte</a>. Todos os
                        Direitos Reservados.
                    </p>
                </div>
                <div class="col-lg-auto ms-auto d-none d-lg-block">
                    <div class="footer-links">
                        <ul>
                            <li><a href="about.html">Política de Privacidade</a></li>
                            <li><a href="about.html">Termos & Condições</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
