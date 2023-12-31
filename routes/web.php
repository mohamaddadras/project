<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\DiscountController;

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | admin.index
    |--------------------------------------------------------------------------
    */

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');

    /*
    |--------------------------------------------------------------------------
    | admin.market
    |--------------------------------------------------------------------------
    */

    Route::prefix('market')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | admin.market.category
        |--------------------------------------------------------------------------
        */

        Route::prefix('category')->group(function () {
            
            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.market.category.destroy');

        });

        /*
        |--------------------------------------------------------------------------
        | admin.market.brand
        |--------------------------------------------------------------------------
        */

        Route::prefix('brand')->group(function () {
            
            Route::get('/', [BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/create', [BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}', [BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::delete('/destroy/{id}', [BrandController::class, 'destroy'])->name('admin.market.brand.destroy');

        });

        /*
        |--------------------------------------------------------------------------
        | admin.market.comment
        |--------------------------------------------------------------------------
        */

        Route::prefix('comment')->group(function () {
            
            Route::get('/', [CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/show', [CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::post('/answer/{id}', [CommentController::class, 'answer'])->name('admin.market.comment.answer');

        });

        /*
        |--------------------------------------------------------------------------
        | admin.market.delivery
        |--------------------------------------------------------------------------
        */

        Route::prefix('delivery')->group(function () {
            
            Route::get('/', [DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/create', [DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store', [DeliveryController::class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}', [DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update/{id}', [DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/destroy/{id}', [DeliveryController::class, 'destroy'])->name('admin.market.delivery.destroy');

        });

        /*
        |--------------------------------------------------------------------------
        | admin.market.discount
        |--------------------------------------------------------------------------
        */

        Route::prefix('discount')->group(function () {

            /*
            |--------------------------------------------------------------------------
            | admin.market.discount.copan
            |--------------------------------------------------------------------------
            */
            
            Route::prefix('copan')->group(function () {

                Route::get('/', [DiscountController::class, 'copan'])->name('admin.market.discount.copan.index');
                Route::get('/create', [DiscountController::class, 'copanCreate'])->name('admin.market.discount.copan.create');

            });

            /*
            |--------------------------------------------------------------------------
            | admin.market.discount.common-discount
            |--------------------------------------------------------------------------
            */
            
            Route::prefix('common-discount')->group(function () {

                Route::get('/', [DiscountController::class, 'commonDiscount'])->name('admin.market.discount.common-discount.index');
                Route::get('/create', [DiscountController::class, 'commonDiscountCreate'])->name('admin.market.discount.common-discount.create');

            });

            /*
            |--------------------------------------------------------------------------
            | admin.market.discount.amazing-sale
            |--------------------------------------------------------------------------
            */
            
            Route::prefix('amazing-sale')->group(function () {

                Route::get('/', [DiscountController::class, 'amazingSale'])->name('admin.market.discount.amazing-sale.index');
                Route::get('/create', [DiscountController::class, 'amazingSaleCreate'])->name('admin.market.discount.amazing-sale.create');

            });

        });

        /*
        |--------------------------------------------------------------------------
        | admin.market.order
        |--------------------------------------------------------------------------
        */

        Route::prefix('order')->group(function () {
            
            Route::get('/', [OrderController::class, 'index'])->name('admin.market.order.index');
            Route::get('/new', [OrderController::class, 'new'])->name('admin.market.order.new');
            Route::get('/sending', [OrderController::class, 'sending'])->name('admin.market.order.sending');
            Route::get('/unpaid', [OrderController::class, 'unpaid'])->name('admin.market.order.unpaid');
            Route::get('/canceled', [OrderController::class, 'canceled'])->name('admin.market.order.canceled');
            Route::get('/returned', [OrderController::class, 'returned'])->name('admin.market.order.returned');
            Route::get('/show', [OrderController::class, 'show'])->name('admin.market.order.show');
            Route::post('/change-send-status', [OrderController::class, 'changeSendStatus'])->name('admin.market.order.change-send-status');
            Route::post('/change-order-status', [OrderController::class, 'changeOrderStatus'])->name('admin.market.order.change-order-status');
            Route::post('/cancel-order', [OrderController::class, 'cancelOrder'])->name('admin.market.order.cancel-order');

        });

    });

});

