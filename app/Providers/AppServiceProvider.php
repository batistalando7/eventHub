<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\News;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('site.layout.header', function ($view) {
            $headerNews = News::where('detach', 'destaque')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();

            $view->with('headerNews', $headerNews);
        });
        Carbon::setLocale('pt');
    }
}
