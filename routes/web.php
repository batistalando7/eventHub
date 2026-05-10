<?php

use Illuminate\Support\Facades\Route;

/* site controllers */
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CultureController;
use App\Http\Controllers\Site\EconomicController;
use App\Http\Controllers\Site\GaleryController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\PolicyController;
use App\Http\Controllers\Site\PublicationController;
use App\Http\Controllers\Site\SocietyController;
use App\Http\Controllers\Site\TechnologyController;
use App\Http\Controllers\Site\VideoController;
use App\Http\Controllers\Site\SubscriptionController;
use App\Http\Controllers\Site\CommentController;
use App\Http\Controllers\Site\SportsController;

/* end site controllers */
/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'portal/home');

Route::get('portal/home', [HomeController::class, 'home'])->name('site.home');


/* Routas de Categoria - listagem */
Route::get('portal/polica', [PolicyController::class, 'policy'])->name('site.policy');
Route::get('portal/economia', [EconomicController::class, 'economic'])->name('site.economic');
Route::get('portal/cultura', [CultureController::class, 'culture'])->name('site.culture');
Route::get('portal/sociedade', [SocietyController::class, 'society'])->name('site.society');
Route::get('portal/tecnologia', [TechnologyController::class, 'tech'])->name('site.tech');
Route::get('portal/desporto', [SportsController::class, 'sport'])->name('site.sports');

/* Routas de Visualizações */
Route::get('portal/visualização/{news:slug}', [NewsController::class, 'newsView'])->name('site.newsView');

Route::get('portal/publication', [PublicationController::class, 'publication'])->name('site.publication');
Route::get('portal/videos', [VideoController::class, 'videos'])->name('site.videos');
Route::get('portal/galery', [GaleryController::class, 'galery'])->name('site.galery');

/* search routes */
Route::get('/pesquisa', [NewsController::class, 'search'])->name('news.search');

/* Rota de subscrição */
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');

/* Rota de Comentarios */
Route::post('/comment/store/{news}', [CommentController::class, 'store'])->name('site.comment.store');





