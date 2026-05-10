{{-- Publicidades --}}
@foreach ($ads as $ad)
    <div class="widget">
        <div class="widget-ads img-ads2">
            <a href="{{ $ad->link }}">
                <img class="w-100" src="{{ url('img/ads/' . $ad->image) }}" alt="ads" />
            </a>
        </div>
    </div>
@endforeach
{{-- Fim das Publicidades --}}
