    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class="nxl-header">
        <div class="header-wrapper">
            <!--! [Start] Header Left !-->
            <div class="header-left d-flex align-items-center gap-4">
                <!--! [Start] nxl-head-mobile-toggler !-->

                <!--! [Start] nxl-head-mobile-toggler !-->
                <!--! [Start] nxl-navigation-toggle !-->
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button">
                        <i class="feather-align-left"></i>
                    </a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
                <!--! [End] nxl-navigation-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu-toggle !-->
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                        <i class="feather-align-left"></i>
                    </a>
                </div>
                <!--! [End] nxl-lavel-mega-menu-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu !-->
                <div class="nxl-drp-link nxl-lavel-mega-menu">
                    <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                        <a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <!--! [Start] nxl-lavel-mega-menu-wrapper !-->
                    <div class="nxl-lavel-mega-menu-wrapper d-flex gap-3">
                        <!--! [Start] nxl-lavel-menu !-->
                    </div>
                    <!--! [End] nxl-lavel-mega-menu-wrapper !-->
                </div>
                <!--! [End] nxl-lavel-mega-menu !-->
            </div>
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="dropdown nxl-h-item nxl-header-search">
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-search-dropdown">
                            <div class="search-items-wrapper">
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nxl-h-item nxl-header-language d-none d-sm-flex">
                    </div>
                    <div class="nxl-h-item d-none d-sm-flex">
                        <div class="full-screen-switcher">
                            <a href="javascript:void(0);" class="nxl-head-link me-0"
                                onclick="$('body').fullScreenHelper('toggle');">
                                <i class="feather-maximize maximize"></i>
                                <i class="feather-minimize minimize"></i>
                            </a>
                        </div>
                    </div>
                    <div class="nxl-h-item dark-light-theme">
                        <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                            <i class="feather-moon"></i>
                        </a>
                        <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                            <i class="feather-sun"></i>
                        </a>
                    </div>
                    {{-- Notificações - Alerts --}}
                    <div class="dropdown nxl-h-item">
                        <a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="#" role="button"
                            data-bs-auto-close="outside">
                            <i class="feather-bell"></i>
                            @if ($unreadCount > 0)
                                <span class="badge bg-danger nxl-h-badge">{{ $unreadCount }}</span>
                            @endif
                        </a>

                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu">
                            <div class="d-flex justify-content-between align-items-center notifications-head">
                                <h6 class="fw-bold text-dark mb-0">Notificações</h6>
                                @if ($unreadCount > 0)
                                    <form action="{{ route('notifications.markAllRead') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-link fs-11 text-success p-0">Marcar todas como
                                            lidas</button>
                                    </form>
                                @endif
                            </div>

                            @forelse($notifications->take(3) as $notif)
                                <div class="notifications-item">
                                   
                                    <div class="notifications-desc">
                                        <a href="{{ route('admin.news.view', $notif->data['id']) }}" class="font-body">
                                            {!! $notif->data['message'] !!}
                                        </a>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div
                                                class="notifications-date text-muted border-bottom border-bottom-dashed">
                                                {{ $notif->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-muted p-3">Sem notificações.</div>
                            @endforelse

                            <div class="text-center notifications-footer">
                                <a href="{{ route('admin.newsArchived.index') }}"
                                    class="fs-13 fw-semibold text-dark">Ver
                                    todas</a>
                            </div>
                        </div>
                    </div>
                    {{-- Fim de Alerts --}}

                    <ul class="dropdown nxl-h-item">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nxl-h-item">
                                <a class="nxl-h-link me-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nxl-h-item me-4">
                                    <a class="nxl-h-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="dropdown nxl-h-item">
                                @if (Auth::user()->image)
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                                        data-bs-auto-close="outside">
                                        <img src="{{ url('img/users/' . Auth::user()->image) }}" alt="user-image"
                                            class="img-fluid user-avtar me-0 "
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </a>
                                @else
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                                        data-bs-auto-close="outside">
                                        <img src="{{ url('assets/images/user.png') }}" alt="user-image"
                                            class="img-fluid user-avtar me-0"
                                            style="width: 40px; height: 40px; object-fit: cover;">
                                    </a>
                                @endif
                                <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                                    <div class="dropdown-header">
                                        <div class="d-flex align-items-center">
                                            <h6 class="text-dark mb-0">
                                                {{ Auth::user()->name }}
                                                <span
                                                    class="badge bg-soft-success text-success ms-1">{{ Auth::user()->role }}</span>
                                            </h6>
                                        </div>
                                        <p class="fs-11 text-muted mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('admin.user.show', Auth::user()->slug) }}"><i
                                            class="feather-user"></i>Meu
                                        Perfil</a>
                                    @can('is-admin')
                                        <a class="dropdown-item" href="{{ route('activity.logs') }}"><i
                                                class="feather-activity"></i>Auditoria de
                                            Atividades</a>
                                    @endcan
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/" target="_blank"><i
                                            class="feather-globe"></i>Website</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/login"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                            class="feather-log-out"></i>
                                        {{ __('Termirar Sessão') }}
                                    </a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                    </div>
                    </li>
                </div>
            @endguest
            </ul>
        </div>
        </div>
        <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
