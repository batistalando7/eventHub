@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- Botão anterior --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span><i class="fas fa-arrow-left"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-arrow-left"></i></a></li>
        @endif

        {{-- Números das páginas --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botão próximo --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-arrow-right"></i></a></li>
        @else
            <li class="disabled"><span><i class="fas fa-arrow-right"></i></span></li>
        @endif
    </ul>
@endif
