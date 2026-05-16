<style>
    #alert-wrapper {
        position: fixed;
        top: 100px;
        right: 30px;
        z-index: 9999;
        width: 400px;
    }

    .custom-alert {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 18px 20px;
        margin-bottom: 15px;
        border-radius: 14px;
        backdrop-filter: blur(15px);
        background: rgba(18, 18, 25, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.35);
        animation: slideIn .5s ease;
        position: relative;
        overflow: hidden;
    }

    .custom-alert::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 5px;
        height: 100%;
    }

    .alert-success::before {
        background: #00d084;
    }

    .alert-error::before {
        background: #ff4d6d;
    }

    .alert-icon {
        font-size: 24px;
        margin-top: 3px;
    }

    .alert-success .alert-icon {
        color: #00d084;
    }

    .alert-error .alert-icon {
        color: #ff4d6d;
    }

    .alert-content strong {
        display: block;
        color: #fff;
        font-size: 16px;
        margin-bottom: 4px;
    }

    .alert-content p,
    .alert-content li {
        color: #bfbfbf;
        font-size: 14px;
        margin: 0;
    }

    .alert-content ul {
        padding-left: 18px;
        margin: 0;
    }

    .alert-close {
        position: absolute;
        top: 10px;
        right: 14px;
        background: none;
        border: none;
        color: #aaa;
        font-size: 22px;
        cursor: pointer;
    }

    .alert-close:hover {
        color: #fff;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(80px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

@if (session('success') || session('error') || $errors->any())

    <div id="alert-wrapper">

        {{-- Success --}}
        @if (session('success'))
            <div class="custom-alert alert-success">
                <div class="alert-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="alert-content">
                    <strong>Sucesso</strong>
                    <p>{{ session('success') }}</p>
                </div>
                <button class="alert-close">&times;</button>
            </div>
        @endif

        {{-- Error --}}
        @if (session('error'))
            <div class="custom-alert alert-error">
                <div class="alert-icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="alert-content">
                    <strong>Erro</strong>
                    <p>{{ session('error') }}</p>
                </div>
                <button class="alert-close">&times;</button>
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="custom-alert alert-error">
                <div class="alert-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="alert-content">
                    <strong>Erro de validação</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button class="alert-close">&times;</button>
            </div>
        @endif

    </div>

@endif
