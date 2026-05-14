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
Route::get('portal/contactos', ['as' => 'site.contacts', 'uses' => 'Site\ContactController@index']);
Route::get('portal/eventos', ['as' => 'site.events', 'uses' => 'Site\EventsController@index']);

Route::get('portal/eventos/{id}', ['as' => 'site.events.details', 'uses' => 'Site\EventsController@show']);
Route::get('portal/eventos/{id}/participar', ['as' => 'site.events.participate', 'uses' => 'Site\EventsController@participate']);
Route::get('portal/quem-somos', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);

/* Rota de Comentarios */
Route::post('/comment/store/{news}', [CommentController::class, 'store'])->name('site.comment.store');





