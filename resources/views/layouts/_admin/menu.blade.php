<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin/dashboard" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ url('assets/images/3-Photoroom.png') }}" alt="SOS" class="logo logo-lg"
                    style="heigth:10rem; width:12rem;">
                <img src="{{ url('assets/images/lillogo.png') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Dashboard</label>
                </li>
                @can('is-admin')
                    {{-- Menu Dashboard --}}
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Visão geral</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/admin/dashboard">Gestão de
                                    contatos</a>
                            </li>
                            {{-- <li class="nxl-item"><a class="nxl-link" href="/analytics">Analytics</a></li> --}}
                        </ul>
                    </li>

                    <hr>

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
                        <span class="nxl-mtext">Notícias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Publicações de Notícias</span><span class="nxl-arrow"><i
                                        class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link"
                                        href="{{ route('admin.news.index') }}">Lista de
                                        Notícias</a></li>
                                <li class="nxl-item"><a class="nxl-link"
                                        href="{{ route('admin.news.create') }}">Nova Notícia</a>
                                </li>
                        </li>
                    </ul>
                </li>

                @can('is-editor')
                    {{-- Noticias Arquivadas --}}
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-mtext">Arquivadas</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link"
                                    href="{{ route('admin.newsArchived.index') }}">Lista de Notícias</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Noticias em Rascunho --}}
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-mtext">Rascunho</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.newsDraft.index') }}">Lista
                                    de Notícias</a>
                            </li>
                        </ul>
                    </li>
                @endcan
            </ul>
            </li>

            {{-- Menu Comentários --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-message-square"></i></span>
                    <span class="nxl-mtext">Comentários</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.comments.index') }}">Lista de
                            Comentários</a>
                    </li>
                    {{-- <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.create') }}">Criar
                            Vídeo</a></li> --}}
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>

            <hr>

            <li class="nxl-item nxl-caption">
                <label>Multimedia</label>
            </li>

            {{-- Menu publications --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-book"></i></span>
                    <span class="nxl-mtext">Biblioteca Digital</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.publication.index') }}">Lista de
                            Publicações</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.publication.create') }}">Criar
                            Publicação</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu videos --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-video"></i></span>
                    <span class="nxl-mtext">Videos</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.index') }}">Lista de
                            Videos</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.create') }}">Criar
                            Vídeo</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu galery --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-image"></i></span>
                    <span class="nxl-mtext">Galeria</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.index') }}">Lista de
                            Galeria</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.create') }}">Criar
                            Galeria</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
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

            {{-- Menu Auditorias --}}
            @can('is-admin')
                <hr>

                <li class="nxl-item nxl-caption">
                    <label>Monitoramento</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-activity"></i></span>
                        <span class="nxl-mtext">Auditorias de Atividades</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('activity.logs') }}">Auditorias</a>
                        </li>
                        {{-- <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.create') }}">Criar
                            Galeria</a></li> --}}
                        <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                    </ul>
                </li>
            @endcan
            </ul>
        </div>
    </div>
    </div>
</nav>
