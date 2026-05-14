@extends('layouts._site.main')
@section('title', 'Sobre Nós')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Sobre <span>Nós</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Us Info Start -->
                    <div class="about-us-info">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Sobre Nós</h3>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Circle Start -->
                        <div class="year-experience-circle">
                            <img src="{{ url('site/images/year-experience-circle.svg') }}" alt="">
                            <h2><span class="counter">20</span>+</h2>
                        </div>
                        <!-- About Us Circle End -->
                    </div>
                    <!-- About Us Info End -->
                </div>

                <div class="col-lg-8">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-effect wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">A team of
                                creative voice artists and sound expert dedicated to turning your words into powerful.</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">O sistema permitirá que organizadores,
                                participantes e administradores interajam de forma prática e segura, automatizando processos
                                que normalmente são realizados manualmente, como cadastro de participantes, divulgação de
                                eventos, aprovação de publicações e geração de relatórios administrativos.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Button Start -->
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="about.html" class="btn-default">Ver Mais</a>
                        </div>
                        <!-- About Us Button End -->
                    </div>
                    <!-- About Us Content End -->
                </div>

                <div class="col-lg-12">
                    <!-- About Item List Start -->
                    <div class="about-item-list">
                        <!-- About Box 1 Start -->
                        <div class="about-box-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="about-item-content">
                                <h3>O EventHub proporcionará:</h3>
                                {{-- <p>With thousands of successful projects and clients across 30+ countries.</p> --}}
                            </div>
                            <div class="about-box-body">
                                <div class="about-body-content">
                                    <ul>
                                        <li>organização na gestão</li>
                                        <li>acesso às informações</li>
                                        <li>Automatização de processos</li>
                                        <li>Segurança e controlo administrativo</li>
                                    </ul>
                                    <a href="contact.html" class="btn-default">contacte Nos</a>
                                </div>
                                <div class="about-body-image">
                                    <figure>
                                        <img src="{{ url('site/images/about-body-image.png') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- About Box 1 End -->

                        <!-- About Box 2 Start -->
                        <div class="about-box-2 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="review-images">
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/author-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/author-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/author-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/author-4.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/author-5.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="about-item-content">
                                <h3>Mais de 15 mil Eventos em todo o mundo.</h3>
                            </div>
                        </div>
                        <!-- About Box 2 End -->

                        <!-- About Box 3 Start -->
                        <div class="about-box-3 box-bg-shape">
                            <div class="about-us-counter">
                                <h2><span class="counter">150</span>+</h2>
                            </div>
                            <div class="about-item-content">
                                <h3>Suporte a vários idiomas</h3>
                                <p>Se você está explorando a EventHub pela primeira vez..</p>
                            </div>
                            <div class="about-us-flags review-images">
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/flag-image-1.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/flag-image-2.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/flag-image-3.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="review-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('site/images/flag-image-4.png') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- About Box 3 End -->
                    </div>
                    <!-- About Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

@endsection
