<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Locale;
use App\Http\Middleware\BeforeMiddleware;

use App\Http\Controllers\Api\Transportation as TransportationAPI;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Transportation;
use App\Http\Controllers\CarRental;

use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Tours;
use App\Http\Controllers\RedirectController;

Route::post('/api/transportation/autocomplete', [TransportationAPI\AutocompleteController::class,'index']);

Route::middleware([Locale::class, BeforeMiddleware::class])->group(function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home.en');
    Route::get('/transportation', [Transportation\IndexController::class, 'index'])->name('transportation.index.en');
    Route::get('/terminals', [WebsiteController::class, 'terminals'])->name('terminals.en');
    Route::get('/terminal-1', [WebsiteController::class, 'terminalOne'])->name('terminalOne.en');
    Route::get('/terminal-2', [WebsiteController::class, 'terminalTwo'])->name('terminalTwo.en');
    Route::get('/terminal-3', [WebsiteController::class, 'terminalThree'])->name('terminalThree.en');
    Route::get('/terminal-4', [WebsiteController::class, 'terminalFour'])->name('terminalFour.en');
    Route::get('/arrivals', [WebsiteController::class, 'arrivals'])->name('arrivals.en');
    Route::get('/departures', [WebsiteController::class, 'departures'])->name('departures.en');
    Route::get('/parking', [WebsiteController::class, 'airportParking'])->name('parking.en');
    Route::get('/money-exchange', [WebsiteController::class, 'moneyExchange'])->name('money-exchange.en');
    Route::get('/car-rental', [CarRental\IndexController::class, 'index'])->name('car-rental.en');

    Route::get('/transportation/list', [Transportation\ProcessController::class, 'list'])->name('transportation.process.search.en');
    Route::post('/transportation/list', [Transportation\ProcessController::class, 'handlerList'])->name('transportation.process.search.handler.en');
    Route::get('/transportation/detail', [Transportation\ProcessController::class, 'detail'])->name('transportation.process.detail.en');
    Route::post('/transportation/detail', [Transportation\ProcessController::class, 'handlerDetail'])->name('transportation.process.detail.handler.en');
    Route::post('/transportation/check', [Transportation\ProcessController::class, 'check'])->name('transportation.process.book.check.en');
    Route::post('/transportation/book', [Transportation\ProcessController::class, 'handlerBook'])->name('transportation.process.book.handler.en');
    Route::get('/payment/{uuid}', [Transportation\ProcessController::class, 'payment'])->name('transportation.process.payment.link.en');
    Route::get('/transportation/payment/{uuid}', [Transportation\ProcessController::class, 'payment'])->name('transportation.process.payment.en');
    Route::get('/transportation/success', [Transportation\ProcessController::class, 'success'])->name('transportation.process.payment.success.en');
    Route::get('/transportation/error', [Transportation\ProcessController::class, 'error'])->name('transportation.process.payment.error.en');
    Route::get('/transportation/login', [Transportation\ProcessController::class, 'login'])->name('transportation.login.en');
    Route::post('/transportation/login', [Transportation\ProcessController::class, 'handlerLogin'])->name('transportation.login.handler.en');
    Route::get('/transportation/my-booking/{uuid}', [Transportation\ProcessController::class, 'myBooking'])->name('transportation.my_booking.en');

    Route::get('/transportation/terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms.en');
    Route::get('/privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy.en');
    Route::get('/cookie-policy', [WebsiteController::class, 'cookies'])->name('cookies.en');

    Route::get('/cache', [Blog\IndexController::class, 'clear'])->name('blog.clear');
    Route::get('/press', [Blog\IndexController::class, 'index'])->name('blog.en');
    Route::get('/press/{category}', [Blog\IndexController::class, 'category'])->name('blog.category.en');
    Route::get('/press/{category}/{slug}', [Blog\IndexController::class, 'post'])->name('blog.post.en');

    Route::get('/cancun-excursions', [Tours\IndexController::class, 'index'])->name('tours.en');

    Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->group(function () {
        Route::get('/', [WebsiteController::class, 'index'])->name('home.es');
        Route::get('/transportacion', [Transportation\IndexController::class, 'index'])->name('transportation.index.es');
        Route::get('/terminales', [WebsiteController::class, 'terminals'])->name('terminals.es');
        Route::get('/terminal-1', [WebsiteController::class, 'terminalOne'])->name('terminalOne.es');
        Route::get('/terminal-2', [WebsiteController::class, 'terminalTwo'])->name('terminalTwo.es');
        Route::get('/terminal-3', [WebsiteController::class, 'terminalThree'])->name('terminalThree.es');
        Route::get('/terminal-4', [WebsiteController::class, 'terminalFour'])->name('terminalFour.es');
        Route::get('/llegadas', [WebsiteController::class, 'arrivals'])->name('arrivals.es');
        Route::get('/salidas', [WebsiteController::class, 'departures'])->name('departures.es');
        Route::get('/estacionamiento', [WebsiteController::class, 'airportParking'])->name('parking.es');
        Route::get('/cambio-de-divisas', [WebsiteController::class, 'moneyExchange'])->name('money-exchange.es');
        Route::get('/renta-de-autos', [CarRental\IndexController::class, 'index'])->name('car-rental.es');

        Route::get('/transportacion/listado', [Transportation\ProcessController::class, 'list'])->name('transportation.process.search.es');
        Route::post('/transportacion/listado', [Transportation\ProcessController::class, 'handlerList'])->name('transportation.process.search.handler.es');
        Route::get('/transportacion/detalle', [Transportation\ProcessController::class, 'detail'])->name('transportation.process.detail.es');
        Route::post('/transportacion/detalle', [Transportation\ProcessController::class, 'handlerDetail'])->name('transportation.process.detail.handler.es');
        Route::post('/transportacion/check', [Transportation\ProcessController::class, 'check'])->name('transportation.process.book.check.es');
        Route::post('/transportacion/reservar', [Transportation\ProcessController::class, 'handlerBook'])->name('transportation.process.book.handler.es');
        Route::get('/pago/{uuid}', [Transportation\ProcessController::class, 'payment'])->name('transportation.process.payment.link.es');
        Route::get('/transportacion/pago/{uuid}', [Transportation\ProcessController::class, 'payment'])->name('transportation.process.payment.es');
        Route::get('/transportacion/exitoso', [Transportation\ProcessController::class, 'success'])->name('transportation.process.payment.success.es');
        Route::get('/transportacion/error', [Transportation\ProcessController::class, 'error'])->name('transportation.process.payment.error.es');
        Route::get('/transportacion/login', [Transportation\ProcessController::class, 'login'])->name('transportation.login.es');
        Route::post('/transportacion/login', [Transportation\ProcessController::class, 'handlerLogin'])->name('transportation.login.handler.es');
        Route::get('/transportacion/mi-reservacion/{uuid}', [Transportation\ProcessController::class, 'myBooking'])->name('transportation.my_booking.es');

        Route::get('/transportacion/terminos-y-condiciones', [WebsiteController::class, 'terms'])->name('terms.es');
        Route::get('/politicas-de-privacidad', [WebsiteController::class, 'privacy'])->name('privacy.es');
        Route::get('/politicas-de-cookies', [WebsiteController::class, 'cookies'])->name('cookies.es');
    

        Route::get('/prensa', [Blog\IndexController::class, 'index'])->name('blog.es');
        Route::get('/prensa/{category}', [Blog\IndexController::class, 'category'])->name('blog.category.es');
        Route::get('/prensa/{category}/{slug}', [Blog\IndexController::class, 'post'])->name('blog.post.es');

        Route::get('/tours-en-cancun', [Tours\IndexController::class, 'index'])->name('tours.es');
    });
});

Route::get('/paypal/capture-order', [Transportation\ProcessController::class, 'payPalCaptureOrder']);
Route::get('/san-jose-del-cabo-hotels', [RedirectController::class, 'toHome']);