@extends('layouts._admin.main')
@section('title', 'Assessorarte- Editar user')
@section('content')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">user</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        @can('is-admin')
                            <a href="/admin">Home</a>
                        @endcan
                    </li>
                    <li class="breadcrumb-item">Editar Perfil</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        
                        <a href="{{ route('admin.user.show', Auth::id()) }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                {{-- Criando Formulário --}}
                <form id="userForm" action="{{ route('admin.user.update', ['user' => $user]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- form --}}
                    @include('form._formUsers.index')
                    {{-- end form --}}
                </form>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
