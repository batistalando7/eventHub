<div class="widget">
    <h3 class="widget_title">Posts Recentes</h3>
    @forelse ($RecentPost as $recents)
        <div class="recent-post-wrap">
            <div class="recent-post">
                <div class="media-img img-footer">
                    <a href="{{ route('site.newsView', ['news' => $recents->slug]) }}"><img
                            src="{{ asset('img/news/' . $recents->image) }}" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                    <h4 class="post-title">
                        <a class="hover-line"
                            href="{{ route('site.newsView', ['news' => $recents->slug]) }}">{{ Str::limit($recents->title, 50) }}</a>
                    </h4>
                    <div class="recent-post-meta">
                        <a href="#"><i
                                class="fal fa-calendar-days"></i>{{ $recents->updated_at->format('d M, Y') }}</a>
                    </div>
                </div>
            </div>
        </div>
    @empty
</div>

<div class="col-12 text-center my-5">
    <p class="alert alert-warning fs-5 py-4 px-5">
        Nenhum post recente de momento.
    </p>
</div>
@endforelse
