{{-- resources/views/errors/403.blade.php --}}
@extends('layouts.app')

@section('title', 'Acesso Negado')

@section('content')
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                    <div
                        class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                        <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body p-sm-5 text-center">
                        <h2 class="fw-bolder mb-4" style="font-size: 120px">4<span class="text-danger">0</span>3</h2>
                        <h4 class="fw-bold mb-2">Page not found</h4>
                        <p class="fs-12 fw-medium text-muted">Sorry, the page you are looking for can't be found. Please
                            check the URL or try to a different page on our site.</p>
                        <div class="mt-5">
                            <a href="{{ url('/') }}" class="btn btn-light-brand w-100">Back Home</a>
                        </div>
                        <div class="mt-5">
                            <a class="dropdown-item" href="/login"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Termirar Sessão') }}
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
