<!-- Footer Section Start -->
<footer class="main-footer bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer Header Start -->
                <div class="footer-header">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-cursor="-opaque">O seu evento começa aqui
                            <span>EventHub.</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Us Circle Start -->
                    <div class="contact-us-circle">
                        <a href="{{ route('site.contacts') }}"><img src="{{ url('site/images/contact-us-circle.svg') }}" alt=""></a>
                    </div>
                    <!-- Contact Us Circle End -->
                </div>
                <!-- Footer Header End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="logo">
                        {{-- <img src="{{ url('site/images/favicon.png') }}" width="50" height="50" alt=""> --}}
                        <span class="home-default">EventHub</span>
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>O EventHub demonstra a aplicação prática de tecnologias web no desenvolvimento de soluções
                            reais para problemas de organização e gestão, contribuindo para a transformação digital dos
                            processos de eventos.</p>
                    </div>
                    <!-- About Footer Content End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Links start -->
                <div class="footer-links">
                    <h3>Contactos para Informação</h3>
                    <!-- Footer Contact List Start -->
                    <div class="footer-contact-list">
                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <p>Telefone</p>
                            <h3><a href="%2b123654789.html">+(244) 924 654 789</a></h3>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <p>Email</p>
                            <h3><a href="mailto:info@eventhub.com">info@eventhub.com</a></h3>
                        </div>
                        <!-- Footer Contact Item End -->
                    </div>
                    <!-- Footer Contact List End -->
                </div>
                <!-- Footer Links end -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Links start -->
                <div class="footer-links">
                    <!-- Footer Location Item start -->
                    <div class="footer-location-item">
                        <h3>Estamos Localizados</h3>
                        <p>4517 Washington Ave. manchester kentucky 39495</p>
                    </div>
                    <!-- Footer Location Item End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <h3>Redes Sociais:</h3>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- Footer Links end -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Links Start -->
                <div class="footer-links footer-newsletter-form">
                    <h3>Subscrever Nossa Newsletter</h3>

                    <form id="newslettersForm" action="#" method="POST">
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" id="mail"
                                placeholder="Email*" required>
                            <button type="submit" class="newsletter-btn"><img src="{{ url('site/images/arrow-white.svg') }}"
                                    alt=""></button>
                        </div>
                    </form>

                    <p>* Para estár sempre atualizado com os últimos eventos.</p>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-12">
                <!-- Footer Copyright Start -->
                <div class="footer-copyright">
                    <!-- Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © {{ now()->format('Y') }} Todos os Direitos Reservados.</p>
                    </div>
                    <!-- Copyright Text End -->

                    <!-- Footer Menu Start -->
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ route('site.home') }}">Inicio</a></li>
                            <li><a href="{{ route('site.about') }}">Quem Somos</a></li>
                            <li><a href="{{ route('site.events') }}">Eventos</a></li>
                            <li><a href="{{ route('site.contacts') }}">contacte-nos</a></li>
                        </ul>
                    </div>
                    <!-- Footer Menu End -->
                </div>
                <!-- Footer Copyright End -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
