@if (!request()->cookie('subscribed'))
    <div class="widget newsletter-widget3" data-bg-src="{{ url('site/assets/img/bg/line_bg_1.png') }}">
        <div class="mb-4">
            <img src="{{ url('site/assets/img/bg/newsletter_img_2.png') }}" alt="Icon">
        </div>
        <h3 class="box-title-24 mb-20">Subscreve Agora</h3>
        <form id="subscribeForm" class="newsletter-form" data-action="{{ route('subscribe.store') }}">
            @csrf
            @include('form._formSubscription.index')
        </form>

        <div id="subscribeMessage" class="mt-2"></div>
    </div>
@endif
