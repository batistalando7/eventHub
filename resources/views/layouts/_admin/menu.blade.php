<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin/dashboard" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                {{-- <img src="{{ url('site/images/favicon.png') }}" alt="SOS" class="logo logo-lg"
                    style="heigth:10rem; width:12rem;"> --}}

                <h1 class="logo logo-lg">EventHub </h1>
                <img src="{{ url('site/images/favicon.png') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Dashboard</label>
                </li>
                @can('is-admin')
                    {{-- Menu Dashboard --}}
                    <li class="nxl-item">
                        <a href="/admin/dashboard" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Visão geral</span>
                        </a>
                    </li>

                    <li class="nxl-item nxl-caption">
                        <label>Recursos</label>
                    </li>

                    {{-- Menu users --}}
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-user"></i></span>
                            <span class="nxl-mtext">Utilizador</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.index') }}">Lista de
                                    Utilizadores</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.create') }}">Novo
                                    Utilizador</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Menu Category --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.categories.index') }}">Lista de
                                Categoria</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.create') }}">Criar
                                Categoria</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Types Categories --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-list"></i></span>
                        <span class="nxl-mtext">Subcategorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.typeCategories.index') }}">Lista
                                de Subcategorias</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.typeCategory.create') }}">Nova
                                Subcategoria</a></li>
                    </ul>
                </li>

                {{-- Menu Tags --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-tag"></i></span>
                        <span class="nxl-mtext">Tags</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.tags.index') }}">Lista de
                                Tags</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.tag.create') }}">Nova Tag</a>
                        </li>
                    </ul>
                </li>
                
                {{-- Menu News --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Eventos</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.index') }}">Todos
                            </a></li>
                        @can('is-editor')
                            {{-- Noticias Arquivadas --}}
                            <li class="nxl-item">
                                <a href="{{ route('admin.newsArchived.index') }}" class="nxl-link">
                                    <span class="nxl-mtext">Arquivados</span>
                                </a>
                            </li>
                            {{-- Noticias em Rascunho --}}
                            <li class="nxl-item">
                                <a href="{{ route('admin.newsDraft.index') }}" class="nxl-link">
                                    <span class="nxl-mtext">Rascunho</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>

                {{-- Menu Comentários --}}
                <li class="nxl-item">
                    <a href="{{ route('admin.comments.index') }}"class="nxl-link">
                        <span class="nxl-micon"><i class="feather-message-square"></i></span>
                        <span class="nxl-mtext">Comentários</span>
                    </a>
                </li>

                <li class="nxl-item nxl-caption">
                    <label>Multimedia</label>
                </li>

                {{-- Menu Publicidade --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-volume-2"></i></span>
                        <span class="nxl-mtext">Anúncios</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.ads.index') }}">Lista de
                                Anúncios</a>
                        </li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.ads.create') }}">Criar
                                Anúncios</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>
