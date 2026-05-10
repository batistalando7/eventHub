@php
    $alreadySubscribed = false;
    if (request()->cookie('subscribed')) {
        $alreadySubscribed = true;
    } elseif (auth()->check()) {
        // Se tiver autenticação de usuário, pode usar:
        $alreadySubscribed = \App\Models\Subscription::where('email', auth()->user()->email)->exists();
    }
@endphp

@if (!$alreadySubscribed)
    <div class="popup-subscribe-area">
        <div class="container">
            <div class="popup-subscribe ">
                @if ($subscription)
                    <div class="box-img img-sub">
                        <img src="{{ asset('img/news/' . $subscription->image) }}" alt="Image">
                    </div>
                @else
                    <div class="box-img img-sub">
                        <img src="{{ url('site/assets/img/fixo.jpg') }}" alt="Image">
                    </div>
                @endif
                <div class="box-content">
                    <button class="simple-icon popupClose">
                        <i class="fal fa-times"></i>
                    </button>
                    <div class="widget newsletter-widget footer-widget">
                        <h3 class="widget_title">Subscrição</h3>
                        <p class="footer-text">Faça a sua subscrição para receber atualizações das notícias em destaque.
                        </p>

                        <form id="subscribeForm" class="newsletter-form" data-action="{{ route('subscribe.store') }}">
                            @csrf
                            @include('form._formSubscription.index')
                        </form>

                        <div id="subscribeMessage" class="mt-2"></div>
                        <div class="mt-30">
                            <input type="checkbox" id="destroyPopup">
                            <label for="destroyPopup">Não quero ver esse pop-up novamente.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
