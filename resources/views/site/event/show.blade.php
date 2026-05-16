@extends('layouts._site.main')
@section('title', 'Detalhes do Evento')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Detalhes do Evento <span>{{ $event->title }}</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="project-category-list wow fadeInUp">
                            <h3>Informações do Evento</h3>
                            <ul>
                                <li>Evento :<span>{{ $event->title }}</span></li>
                                <li>Categoria :<span>{{ $event->category->name }}</span></li>
                                <li>Autor :<span>{{ $event->author }}</span></li>
                                <li>Endereço :<span>{{ $event->address }}</span></li>
                                <li>Data :<span>{{ date('d/m/Y', strtotime($event->date)) }}</span></li>
                                <a href="{{ route('site.events.participate', $event->id) }}" class="home-default">Participar</a>
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Satisfy Client Box Start -->
                            <div class="satisfy-client-box">
                                <!-- Satisfy Client Images Start -->
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
                                <!-- Satisfy Client Images End -->

                                <!-- Satisfy Client Content Start -->
                                <div class="satisfy-client-content">
                                    <p><span>5.5k+</span> Clientes Satisfeitos no mundo</p>
                                </div>
                                <!-- Satisfy Client Content End -->
                            </div>
                            <!-- Satisfy Client Box End -->

                            <!-- Satisfy CTA Contact Start -->
                            <div class="sidebar-cta-contact">
                                <h3>Precisa de ajuda?</h3>
                                <ul>
                                    <li><img src="{{ url('site/images/icon-phone.svg') }}" alt=""><a href="tel:123456789">+123 456
                                            789</a></li>
                                    <li><img src="{{ url('site/images/icon-mail.svg') }}" alt=""><a
                                            href="mailto:info@eeventhub.com">info@eeventhub.com</a></li>
                                </ul>
                            </div>
                            <!-- Satisfy CTA Contact End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Page Single Image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ url('storage/' . $event->image) }}" alt="">
                            </figure>
                        </div>
                        <!-- Page Single Image End -->

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            {{-- <p class="wow fadeInUp">{!! $event->description !!}</p>
                             --}}

                            <!-- Project Solution Box Start -->
                            <div class="project-solution-box">
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">Descrição do <span>Evento</span>
                                </h2>
                                {{-- <p class="wow fadeInUp" data-wow-delay="0.6s">Our service is designed to provide you with
                                    everything you need to achieve meaningful results through AI-driven solutions. From
                                    in-depth consultation and tailored strategies to seamless implementation and ongoing
                                    support</p> --}}

                                <!-- Project Solution Image Content Start -->
                                <div class="project-solution-image-content">
                                    <!-- Project Solution Image Start -->
                                    {{-- <div class="project-solution-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ url('site/images/project-solution-image.jpg') }}" alt="">
                                        </figure>
                                    </div> --}}
                                    <!-- Project Solution Image End -->

                                    <!-- Project Solution Content Start -->
                                    <div class="project-solution-content wow fadeInUp" data-wow-delay="0.8s">
                                        <p>{!! $event->description ?? 'Descrição do evento não disponível.' !!}</p>

                                        {{-- <ul>
                                            <li>Next-gen edge ai for smarter devices.</li>
                                            <li>Scalable edge ai for connected device.</li>
                                            <li>Secure edge ai for smart environment.</li>
                                            <li>Adaptive edge ai intelligent devices.</li>
                                        </ul> --}}
                                    </div>
                                    <!-- Project Solution Content End -->
                                </div>
                                <!-- Project Solution Image Content End -->
                            </div>
                            <!-- Project Solution Box End -->

                            <!-- Project Performance Box Start -->
                            {{-- <div class="project-performance-box">
                                <h2 class="wow fadeInUp">Ongoing performance <span>monitoring</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">We ensure your AI systems stay optimized and
                                    effective through continuous tracking, updates, and performance enhancements for lasting
                                    impact.</p>

                                <!-- Performance Step List Start -->
                                <div class="performance-step-list">
                                    <!-- Performance Step Item Start -->
                                    <div class="performance-step-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="performance-step-no">
                                            <h3>Step 01</h3>
                                        </div>
                                        <div class="performance-step-content">
                                            <h3>Project challange</h3>
                                            <p>We analyze your unique business needs to develop machine learning models and
                                                AI systems tailored</p>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ url('site/images/icon-what-we-do-body-1.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Performance Step Item End -->

                                    <!-- Performance Step Item Start -->
                                    <div class="performance-step-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="performance-step-no">
                                            <h3>Step 02</h3>
                                        </div>
                                        <div class="performance-step-content">
                                            <h3>Project solution</h3>
                                            <p>We analyze your unique business needs to develop machine learning models and
                                                AI systems tailored</p>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ url('site/images/icon-what-we-do-body-2.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Performance Step Item End -->

                                    <!-- Performance Step Item Start -->
                                    <div class="performance-step-item highlighted-box wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="performance-step-no">
                                            <h3>Step 03</h3>
                                        </div>
                                        <div class="performance-step-content">
                                            <h3>Achieved Milestones</h3>
                                            <p>We successfully reached key project goals within the planned timeline and
                                                scope. Each milestone marked measurable progress toward delivering a
                                                high-impact AI solution.</p>
                                        </div>
                                        <div class="icon-box">
                                            <img src="{{ url('site/images/icon-what-we-do-body-3.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Performance Step Item End -->
                                </div>
                                <!-- Performance Step List End -->
                            </div> --}}
                            <!-- Project Performance Box End -->

                            <!-- Project Experience Box Start -->
                            {{-- <div class="project-experience-box">
                                <h2 class="wow fadeInUp">What the client <span>experienced</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">We ensure your AI systems stay optimized and
                                    effective through continuous tracking, updates, and performance enhancements for lasting
                                    impact.</p>

                                <!-- Project Experience List Start -->
                                <div class="project-experience-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Revolutionizing devices with next-gen edge ai.</li>
                                        <li>Transforming everyday devices through advanced</li>
                                        <li>Smarter performance powered by edgetechnology</li>
                                        <li>Edge ai innovation driving future-ready solutions</li>
                                    </ul>
                                </div>
                                <!-- Project Experience List End -->

                                <p class="wow fadeInUp" data-wow-delay="0.6s">Edge AI is redefining how devices operate by
                                    bringing intelligence closer to the source of data. It enables faster processing,
                                    enhanced privacy, and real-time decision-making without relying solely on the cloud.
                                    From smart homes to industrial automation, Edge AI is unlocking new possibilities. With
                                    tailored solutions, we help businesses stay ahead in a connected, intelligent world.</p>
                            </div> --}}
                            <!-- Project Experience Box End -->
                        </div>
                        <!-- Project Entry End -->

                        <!-- Page Single FAQs Start -->
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            {{-- <div class="section-title">
                                <h2 class="wow fadeInUp" data-cursor="-opaque">Frequently asked <span>question</span></h2>
                            </div> --}}
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            {{-- <div class="faq-accordion" id="faqaccordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true"
                                            aria-controls="collapse1">
                                            1. What industries can benefit from AI solutions?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We monitor system performance in real-time, identifying and addressing any
                                                issues to ensure that your AI solution runs smoothly at all times.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            2. How do you customize AI solutions for my needs?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse show"
                                        aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We monitor system performance in real-time, identifying and addressing any
                                                issues to ensure that your AI solution runs smoothly at all times.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            3. What kind of support do you provide post-deployment?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We monitor system performance in real-time, identifying and addressing any
                                                issues to ensure that your AI solution runs smoothly at all times.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                            4. How secure is the AI technology you use?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We monitor system performance in real-time, identifying and addressing any
                                                issues to ensure that your AI solution runs smoothly at all times.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            5. How long does it take to see results?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We monitor system performance in real-time, identifying and addressing any
                                                issues to ensure that your AI solution runs smoothly at all times.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            </div> --}}
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- Page Single FAQs End -->
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
@endsection
