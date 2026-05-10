<div id="carouselGalery{{ $item->id }}" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        @foreach ($item->images as $index => $img)
            <div class="carousel-item @if($index == 0) active @endif">
                <img src="{{ asset('img/galeries/' . $img) }}"
                     class="d-block w-100 rounded"
                     alt="Imagem da galeria {{ $item->title }}">
            </div>
        @endforeach

    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGalery{{ $item->id }}"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselGalery{{ $item->id }}"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
