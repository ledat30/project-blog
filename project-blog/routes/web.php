<?php

use Illuminate\Support\Facades\Route;

//  ADMIN
    Route::prefix('admin')->group(function () {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])
        ->name('admin.auth.login');
    Route::post('login', [\App\Http\Controllers\Admin\AuthController::class, 'checkLogin'])
        ->name('admin.auth.check-login');
    });

    Route::prefix('admin')->middleware('admin.login')->group(function () {
//    middleware('admin.login')->
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])
        ->name('admin.logout');
    Route::get('profile', [\App\Http\Controllers\Admin\AuthController::class, 'profile'])
        ->name('admin.profile.index');
    Route::put('profile', [\App\Http\Controllers\Admin\AuthController::class, 'updateProfile'])
        ->name('admin.profile.update');

    Route::get('index', [\App\Http\Controllers\Admin\IndexController::class, 'index'])
        ->name('index');


    Route::prefix('categoty-manage')->group(function () {
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
            ->name('admin.category.index');
        Route::get('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])
            ->name('admin.category.create');
        Route::post('store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])
            ->name('admin.category.store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])
            ->name('admin.category.edit');
        Route::put('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])
            ->name('admin.category.update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])
            ->name('admin.category.delete');
    });

    Route::prefix('post')->group(function () {
        Route::get('post', [\App\Http\Controllers\Admin\PostController::class, 'index'])
            ->name('admin.post.index');
        Route::get('create', [\App\Http\Controllers\Admin\PostController::class, 'create'])
            ->name('amin.post.create');
        Route::post('store', [\App\Http\Controllers\Admin\PostController::class, 'store'])
            ->name('admin.post.store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\PostController::class, 'edit'])
            ->name('admin.post.edit');
        Route::put('update/{id}', [\App\Http\Controllers\Admin\PostController::class, 'update'])
            ->name('admin.post.update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\PostController::class, 'delete'])
            ->name('admin.post.delete');
        Route::get('detail/{id}',[\App\Http\Controllers\Admin\PostController::class,'detail'])
            ->name('DetailPost');
    });

        Route::prefix('slide')->group(function () {
            Route::get('slide', [\App\Http\Controllers\Admin\SlideController::class, 'index'])
                ->name('admin.slide.index');
            Route::get('create', [\App\Http\Controllers\Admin\SlideController::class, 'create'])
                ->name('amin.slide.create');
            Route::post('store', [\App\Http\Controllers\Admin\SlideController::class, 'store'])
                ->name('admin.slide.store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\SlideController::class, 'edit'])
                ->name('admin.slide.edit');
            Route::put('update/{id}', [\App\Http\Controllers\Admin\SlideController::class, 'update'])
                ->name('admin.slide.update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\SlideController::class, 'delete'])
                ->name('admin.slide.delete');
        });

        Route::prefix('content-banner')->group(function () {
            Route::get('content', [\App\Http\Controllers\Admin\ContentBannerController::class, 'index'])
                ->name('admin.content.index');
            Route::get('create', [\App\Http\Controllers\Admin\ContentBannerController::class, 'create'])
                ->name('amin.content.create');
            Route::post('store', [\App\Http\Controllers\Admin\ContentBannerController::class, 'store'])
                ->name('admin.content.store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentBannerController::class, 'edit'])
                ->name('admin.content.edit');
            Route::put('update/{id}', [\App\Http\Controllers\Admin\ContentBannerController::class, 'update'])
                ->name('admin.content.update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentBannerController::class, 'delete'])
                ->name('admin.content.delete');
            Route::get('detail/{id}',[\App\Http\Controllers\Admin\ContentBannerController::class,'detail'])
                ->name('DetailContent');
        });

    Route::prefix('contact')->group(function () {
        Route::get('contact', [\App\Http\Controllers\Admin\ContactController::class, 'index'])
            ->name('admin.contact.index');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContactController::class, 'delete'])
            ->name('admin.contact.delete');
    });

        Route::prefix('comment')->group(function () {
            Route::get('comment', [\App\Http\Controllers\Admin\CommentController::class, 'index'])
                ->name('admin.comment.index');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\CommentController::class, 'delete'])
                ->name('admin.comment.delete');
        });

    Route::prefix('user-manage')->group(function () {
        Route::get('/user', [\App\Http\Controllers\Admin\UserController::class, 'index'])
            ->name('users.index');
        Route::get('/user/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])
            ->name('users.create');
        Route::post('/user/create', [\App\Http\Controllers\Admin\UserController::class, 'store'])
            ->name('users.store');
        Route::get('user/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])
            ->name('users.edit');
        Route::put('user/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'update'])
            ->name('users.update');
        Route::delete('/user/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])
            ->name('users.destroy');
    });
});

//   WEB

    Route::prefix('web')->group(function () {
        Route::get('login', [\App\Http\Controllers\Web\AuthController::class, 'formLogin'])
            ->name('web.login');
        Route::post('login', [\App\Http\Controllers\Web\AuthController::class, 'login'])
            ->name('web.auth.login');
//});
//    Route::prefix('web')->middleware('web.login')->group(function () {

        Route::get('logout', [\App\Http\Controllers\Web\AuthController::class , 'logout'])
            ->name('web.logout');
        Route::get('registration',[\App\Http\Controllers\Web\AuthController::class,'formRegistration'])
            ->name('form.registration.web');
        Route::post('registration',[\App\Http\Controllers\Web\AuthController::class,'registration'])
            ->name('registration.web');
        Route::get('profile', [\App\Http\Controllers\Web\AuthController::class , 'profile'])
            ->name('web.profile');
        Route::put('profile', [\App\Http\Controllers\Admin\AuthController::class, 'updateProfile'])
            ->name('admin.profile.update');

        Route::get('search',[\App\Http\Controllers\Web\WebController::class , 'search']);

        Route::get('/home',[\App\Http\Controllers\Web\WebController::class,'home'])
            ->name('home.web');
        Route::get('category',[\App\Http\Controllers\Web\WebController::class,'category'])
            ->name('category.web');
        Route::get('category/{slug}' ,[\App\Http\Controllers\Web\WebController::class, 'categorySlug'])
            ->name('categorySlug.web');
        Route::get('post/{slug}',[\App\Http\Controllers\Web\WebController::class,'post'])
            ->name('post.web');
        Route::post('post/comment/{id}',[\App\Http\Controllers\Web\WebController::class,'comment'])
            ->name('post.comment');
        Route::get('contact',[\App\Http\Controllers\Web\WebController::class , 'contact'])
            ->name('contact.web');
        Route::post('contact', [\App\Http\Controllers\Web\WebController::class, 'store'])
            ->name('web.contact.store');
});

