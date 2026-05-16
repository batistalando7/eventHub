@extends('layouts.app')
@section('title', 'EventHub - Login')
@section('content')
    <div class="auth-minimal-inner">
        <div class="minimal-card-wrapper">
            <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                    <img src="{{ url('assets/images/2-Photoroom.png') }}" alt="" class="img-fluid">
                </div>
                <div class="card-body p-sm-5">
                    <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                    <h4 class="fs-13 fw-bold mb-2">Entra com a sua conta</h4>
                    {{-- <p class="fs-12 fw-medium text-muted">Thank you for get back <strong>Nelel</strong> web applications,
                        let's access our the best recommendation for you.</p> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label c-pointer"
                                        for="rememberMe">{{ __('Lembre de mim') }}</label>
                                </div>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="fs-11 text-danger" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-danger w-100">{{ __('Entrar') }}</button>
                        </div>
                    </form>
                    {{-- <div class="w-100 mt-5 text-center mx-auto">
                        <div class="mb-4 border-bottom position-relative"><span
                                class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute translate-middle">ou</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <a href="{{ route('google.redirect') }}" class="btn btn-light-brand flex-fill"
                                data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login com Google">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="btn btn-light-brand flex-fill"
                                data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login com Microsoft">
                                <i class="fab fa-windows text"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" title="Login with Github">
                                <i class="feather-github text"></i>
                            </a>
                        </div>
                    </div> --}}
                    <div class="mt-5 text-muted">
                        <span> Não tem uma conta?</span>
                        <a href="/register" class="fw-bold">Criar Conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
