<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Redirect root to default locale
Route::get('/', function () {
    return redirect()->route('web.home', ['locale' => app()->getLocale() ?? 'en']);
});

// Grouped routes by locale
Route::group([
    'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale()
],
    function () {
    Route::get('/', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.home');

    Route::get('/about', \App\Http\Controllers\Web\FrontendAboutController::class)->name('web.about');

    Route::get('/programs', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.programs');
    Route::get('/programs/{slug}', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.programs.show');

    Route::get('/impact', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.impact');
    Route::get('/team', \App\Http\Controllers\Web\FrontendTeamController::class)->name('web.team');

    Route::get('/stories', \App\Http\Controllers\Web\FrontendStoryController::class)->name('web.stories');

    Route::get('/partners', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.partners');

    Route::get('/news', \App\Http\Controllers\Web\FrontendNewsController::class)->name('web.news.index');
    Route::get('/news/{slug}', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.news.show');

    Route::get('/donate', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.donate');
    Route::get('/volunteer', \App\Http\Controllers\Web\FrontendHomeController::class)->name('web.volunteer');

    Route::get('/contact', [\App\Http\Controllers\Web\FrontendContactController::class,'show'])->name('web.contact');
    Route::post("/contact", [\App\Http\Controllers\Web\FrontendContactController::class,'store'])->name("web.contact.store");
});
