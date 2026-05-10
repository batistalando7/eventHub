<div class="popup-search-box">
    <button class="searchClose">
        <i class="fal fa-times"></i>
    </button>
    <form action="{{ route('news.search') }}" method="GET">
        <input type="text" name="q" placeholder="O que está procurando?" value="{{ request('q') }}">
        <button type="submit">
            <i class="fal fa-search"></i>
        </button>
    </form>
</div>
