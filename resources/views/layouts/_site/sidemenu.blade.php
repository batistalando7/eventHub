<div class="sidemenu-wrapper sidemenu-1 d-none d-md-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
        </button>
        <div class="widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="/">
                        <img class="light-img" src="{{ url('site/assets/img/3-Photoroom.png') }}" alt="Tnews">
                    </a>
                    <a href="/">
                        <img class="dark-img" src="{{ url('site/assets/img/1-Photoroom.png') }}" alt="Tnews">
                    </a>
                </div>
                <p class="about-text">As revistas abrangem uma ampla gama de assuntos, incluindo, entre
                    outros, moda, estilo de vida,
                    política, negócios, entretenimento, desportos, ciência...</p>
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
        <div class="widget">
            <h3 class="widget_title">Postagens Recentes</h3>
            <div class="recent-post-wrap">
                @foreach ($Recent as $dados)
                    <div class="recent-post">
                        <div class="media-img img-footer">
                            <a href="blog-details.html">
                                <img src="{{ asset('img/news/' . $dados->image) }}" alt="Blog Image">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title">
                                <a class="hover-line"
                                    href="blog-details.html">{{ Str::limit($dados->title, 45, '...') }}</a>
                            </h4>
                            <div class="recent-post-meta">
                                <a href="#">
                                    <i class="fal fa-calendar-days"></i>{{ $dados->created_at->format('d M, Y') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="widget newsletter-widget footer-widget">
            <h3 class="widget_title">Subscrição</h3>
            <p class="footer-text">Cadastre-se para receber atualizações sobre nós. Não tenha pressa, seu e-mail está
                seguro.</p>
            <form class="newsletter-form">
                <input class="form-control" type="email" placeholder="Enter Email" required>
                <button type="submit" class="icon-btn">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
            <div class="mt-30">
                <input type="checkbox" id="destroyPopup">
                <label for="destroyPopup">Não quero ver esse pop-up novamente.</label>
            </div>
        </div>
    </div>
</div>
