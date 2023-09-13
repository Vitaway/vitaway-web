<?php

    use App\Http\Controllers\BlogController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    /**
     * -----------------------------
     * Authenticated user routes
     * ------------------------------
     */
    Route::group(['middleware' => 'auth:api'], function() {
        /**
         * -----------------------------------------------
         * Docs routes
         * ------------------------------------------------
         */
        Route::get('/blogs', [BlogController::class, 'index'])->name('get.blogs');
        Route::post('/blogs', [BlogController::class, 'store'])->name('post.blogs');
        Route::post('/blogs/{blog}', [BlogController::class, 'update'])->name('update.blog');
        Route::post('/categories', [BlogController::class, 'storeCategories'])->name('post.categories');
        Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('delete.blogs');
    });
