<?php

 use Illuminate\Support\Facades\Route;

/* Admin controllers */
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TypeCategoryController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\dashController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Admin\AlertsController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\RelatorioController;

/* end admin controllers */

/* auth controllers */
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
/* end auth controllers */


route::get('/analytics', function () {
    return view('_admin.dashboard.analytics.index');
});

/* Rota de verificação de e-mail */
Auth::routes(['verify' => true]);

/* Routas de admin */
Route::group([
    'middleware' => ['auth', 'role:admin', \App\Http\Middleware\LogUserActivity::class]
], function () {

    /* Dashboard */
    Route::redirect('/admin', 'admin/dashboard')->name('dashboard');
    Route::get('/admin/dashboard', [dashController::class, 'management'])->name('admin.dashboard');

    /* Rota de Logging (página de visualização de logs) */
    Route::get('/admin/activity-logs', [ActivityLogController::class, 'index'])->name('activity.logs');

    /* Users routes */
    Route::prefix('admin.users')->name('admin.')->group(function () {
        Route::get('user', [UserController::class, 'index'])->name('user.index');
        Route::get('create', [UserController::class, 'create'])->name('user.create');
        Route::post('userStore', [UserController::class, 'store'])->name('user.store');
        Route::get('details/{user:slug}', [UserController::class, 'show'])->name('user.show');
        Route::get('edit/{user:slug}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('userUpdate/{user:slug}', [UserController::class, 'update'])->name('user.update');
        Route::get('userDelete/{user:slug}', [UserController::class, 'destroy'])->name('user.delete');
    });
    /* end users routes */

});


/* Routas Editor */
Route::group([
    'middleware' => ['auth', 'role:admin,editor', \App\Http\Middleware\LogUserActivity::class]
], function () {

    /* Users Route - Profile */
    Route::prefix('admin.users')->name('admin.')->group(function () {
        Route::get('details/{user:slug}', [UserController::class, 'show'])->name('user.show');
        Route::get('edit/{user:slug}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('userUpdate/{user:slug}', [UserController::class, 'update'])->name('user.update');
    });
    /* end users routes */

    /*Category routes*/
    Route::prefix('admin.categories')->name('admin.')->group(function () {
        Route::get('list', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('details/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    });

    Route::post('/notifications/mark-all-read', [AlertsController::class, 'markAllRead'])->name('notifications.markAllRead');
    Route::get('/notifications', [AlertsController::class, 'index'])->name('notifications.all');

    /* news routes */
    Route::prefix('admin.news')->name('admin.')->group(function () {
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('newsArchived', [NewsController::class, 'arquivadas'])->name('newsArchived.index');
        Route::get('newsDraft', [NewsController::class, 'rascunho'])->name('newsDraft.index');
        Route::get('create', [NewsController::class, 'create'])->name('news.create');
        Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
        Route::get('edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('details/{news}', [NewsController::class, 'show'])->name('news.view');
        Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
        Route::resource('tags', TagController::class);
        Route::post('news/upload-image', [NewsController::class, 'uploadImage'])->name('news.uploadImage');
    });

    /* Gerar Relatorio */
    Route::get('formulario/relatorio', [RelatorioController::class, 'formReports'])->name('form.reports');
    Route::get('relatorio', [RelatorioController::class, 'noticia'])->name('relatorio.noticia');


    /* comments routes */
    Route::prefix('admin/comments')->name('admin.')->group(function () {
        Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
        Route::get('create', [CommentController::class, 'create'])->name('comment.create');
        Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store');
        Route::get('edit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
        Route::get('details/{comment}', [CommentController::class, 'show'])->name('comment.view');
        Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
    });
    /* tags routes */
    Route::prefix('admin.tags')->name('admin.')->group(function () {
        Route::get('tags', [TagController::class, 'index'])->name('tags.index');
        Route::get('create', [TagController::class, 'create'])->name('tag.create');
        Route::post('tagStore', [TagController::class, 'store'])->name('tag.store');
        Route::get('edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update');
        Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view');
        Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete');
    });

    /* typeCategory routes */
    Route::prefix('admin.typeCategories')->name('admin.')->group(function () {
        Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index');
        Route::get('create', [TypeCategoryController::class, 'create'])->name('typeCategory.create');
        Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store');
        Route::get('typeview/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show');
        Route::get('typeedit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit');
        Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update');
        Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete');
    });
    /* publications routes */
    Route::prefix('admin/publications')->name('admin.')->group(function () {
        Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
        Route::get('create', [PublicationController::class, 'create'])->name('publication.create');
        Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store');
        Route::get('edit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit');
        Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update');
        Route::get('details/{publication}', [PublicationController::class, 'show'])->name('publication.view');
        Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete');
    });
    /* videos routes */
    Route::prefix('admin/videos')->name('admin.')->group(function () {
        Route::get('video', [VideoController::class, 'index'])->name('video.index');
        Route::get('create', [VideoController::class, 'create'])->name('video.create');
        Route::post('videoStore', [VideoController::class, 'store'])->name('video.store');
        Route::get('edit/{video}', [videoController::class, 'edit'])->name('video.edit');
        Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update');
        Route::get('details/{video}', [videoController::class, 'show'])->name('video.view');
        Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete');
    });
    /* galery routes */
    Route::prefix('admin/galeries')->name('admin.')->group(function () {
        Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
        Route::get('create', [GaleryController::class, 'create'])->name('galery.create');
        Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store');
        Route::get('edit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit');
        Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update');
        Route::get('details/{galery}', [GaleryController::class, 'show'])->name('galery.view');
        Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete');
    });

});


/* Routas Jornalista*/
Route::group([
    'middleware' => ['auth', 'role:admin,editor,jornalista', \App\Http\Middleware\LogUserActivity::class]
], function () {

    /* Users Route - Profile */
    Route::prefix('admin.users')->name('admin.')->group(function () {
        Route::get('details/{user:slug}', [UserController::class, 'show'])->name('user.show');
        Route::get('edit/{user:slug}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('userUpdate/{user:slug}', [UserController::class, 'update'])->name('user.update');
    });
    /* end users routes */

    /*Category routes*/
    Route::prefix('admin.categories')->name('admin.')->group(function () {
        Route::get('list', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('details/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    });

    /* tags routes */
    Route::prefix('admin.tags')->name('admin.')->group(function () {
        Route::get('tags', [TagController::class, 'index'])->name('tags.index');
        Route::get('create', [TagController::class, 'create'])->name('tag.create');
        Route::post('tagStore', [TagController::class, 'store'])->name('tag.store');
        Route::get('edit/{tag}', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update');
        Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view');
        Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete');
    });

    /* typeCategory routes */
    Route::prefix('admin.typeCategories')->name('admin.')->group(function () {
        Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index');
        Route::get('create', [TypeCategoryController::class, 'create'])->name('typeCategory.create');
        Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store');
        Route::get('typeview/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show');
        Route::get('typeedit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit');
        Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update');
        Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete');
    });

    /* news routes */
    Route::prefix('admin.news')->name('admin.')->group(function () {
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('create', [NewsController::class, 'create'])->name('news.create');
        Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
        Route::get('edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('details/{news}', [NewsController::class, 'show'])->name('news.view');
        Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
        Route::resource('tags', TagController::class);
        Route::post('news/upload-image', [NewsController::class, 'uploadImage'])->name('news.uploadImage');
    });
    /* comments routes */
    Route::prefix('admin/comments')->name('admin.')->group(function () {
        Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
        Route::get('create', [CommentController::class, 'create'])->name('comment.create');
        Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store');
        Route::get('edit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
        Route::get('details/{comment}', [CommentController::class, 'show'])->name('comment.view');
        Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
    });
    /* publications routes */
    Route::prefix('admin/publications')->name('admin.')->group(function () {
        Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
        Route::get('create', [PublicationController::class, 'create'])->name('publication.create');
        Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store');
        Route::get('edit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit');
        Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update');
        Route::get('details/{publication}', [PublicationController::class, 'show'])->name('publication.view');
        Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete');
    });
    /* videos routes */
    Route::prefix('admin/videos')->name('admin.')->group(function () {
        Route::get('video', [VideoController::class, 'index'])->name('video.index');
        Route::get('create', [VideoController::class, 'create'])->name('video.create');
        Route::post('videoStore', [VideoController::class, 'store'])->name('video.store');
        Route::get('edit/{video}', [videoController::class, 'edit'])->name('video.edit');
        Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update');
        Route::get('details/{video}', [videoController::class, 'show'])->name('video.view');
        Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete');
    });
    /* galery routes */
    Route::prefix('admin/galeries')->name('admin.')->group(function () {
        Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
        Route::get('create', [GaleryController::class, 'create'])->name('galery.create');
        Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store');
        Route::get('edit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit');
        Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update');
        Route::get('details/{galery}', [GaleryController::class, 'show'])->name('galery.view');
        Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete');
    });
});
/* Routas Assinante */
Route::group(['middleware' => ['auth', 'role:assinante']], function () {

});

/*-------------------------------------------------------
                    Ads routes
-------------------------------------------------------*/
Route::prefix('admin.ads')->name('admin.')->group(function () {
    Route::get('ads', [AdvertisementController::class, 'index'])->name('ads.index')->middleware('auth');
    Route::get('create', [AdvertisementController::class, 'create'])->name('ads.create')->middleware('auth');
    Route::post('ads', [AdvertisementController::class, 'store'])->name('ads.store')->middleware('auth');
});

/*-------------------------------------------------------
                    Auth routes
-------------------------------------------------------*/
Auth::routes();
Route::redirect('/home', '/admin');
/* Route::get('/admin', 'HomeController@index')->name('home'); */
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

/* Rotas de Autenticação Social */

// Google
Route::get('auth/{provider}', [SocialAuthController::class, 'redirect']);
Route::get('auth/google/redirect', [SocialAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('google.callback');
/* MicroSoft */
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'callback']);
