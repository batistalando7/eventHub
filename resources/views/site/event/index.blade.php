@extends('layouts._site.main')
@section('title', 'Todos Eventos')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Nossos <span>Eventos</span></h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Projects Start -->
    <div class="page-projects">
        <div class="container">
            <div class="row">
                @foreach ($events as $item)
                    <div class="col-lg-4 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp">
                            <div class="project-image box-bg-shape">
                                <figure class="image-anime">
                                    <img src="{{ url('storage/' . $item->image) }}" alt="">
                                </figure>

                                <div class="project-btn">
                                    <a href="{{ route('site.events.details', $item->id) }}">
                                        <img src="{{ url('site/images/arrow-white.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3>{{ $item->category->name }}</h3>
                                <h2><a href="{{ route('site.events.details', $item->id) }}">{{ $item->title }}</a></h2>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>
                @endforeach

                {{-- <div class="col-lg-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="project-image box-bg-shape">
                            <figure class="image-anime">
                                <img src="{{ url('site/images/project-2.jpg') }}" alt="">
                            </figure>

                            <div class="project-btn">
                                <a href="project-single.html">
                                    <img src="{{ url('site/images/arrow-white.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3>eLearning / Education</h3>
                            <h2><a href="project-single.html">Multilingual Course Narration for SkillWise Academy's Online Learning</a></h2>
                        </div>
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="project-image box-bg-shape">
                            <figure class="image-anime">
                                <img src="{{ url('site/images/project-3.jpg') }}" alt="">
                            </figure>

                            <div class="project-btn">
                                <a href="project-single.html">
                                    <img src="{{ url('site/images/arrow-white.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3>Mobile App / Fitness</h3>
                            <h2><a href="project-single.html">Conversational Voiceover for FitBuddy's Mobile App Onboarding </a></h2>
                        </div>
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="project-image box-bg-shape">
                            <figure class="image-anime">
                                <img src="{{ url('site/images/project-4.jpg') }}" alt="">
                            </figure>

                            <div class="project-btn">
                                <a href="project-single.html">
                                    <img src="{{ url('site/images/arrow-white.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3>Animated / Tech</h3>
                            <h2><a href="project-single.html">High-Quality Animated Short Film with Custom Voiceover Characters</a></h2>
                        </div>
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="project-image box-bg-shape">
                            <figure class="image-anime">
                                <img src="{{ url('site/images/project-5.jpg') }}" alt="">
                            </figure>

                            <div class="project-btn">
                                <a href="project-single.html">
                                    <img src="{{ url('site/images/arrow-white.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3>LangTech / Edulingo</h3>
                            <h2><a href="project-single.html">Language Learning Video with Native Speaker Voiceover</a></h2>
                        </div>
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="1s">
                        <div class="project-image box-bg-shape">
                            <figure class="image-anime">
                                <img src="{{ url('site/images/project-6.jpg') }}" alt="">
                            </figure>

                            <div class="project-btn">
                                <a href="project-single.html">
                                    <img src="{{ url('site/images/arrow-white.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3>Scientific / Scientific</h3>
                            <h2><a href="project-single.html">Explainer Video on a Scientific Concept with Scientific</a></h2>
                        </div>
                    </div>
                    <!-- Project Item End -->
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Page Projects End -->

@endsection
