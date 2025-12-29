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

    Route::get('/programs', [\App\Http\Controllers\Web\FrontendProgramController::class, 'index'])->name('web.programs');
    Route::get('/programs/{slug}', [\App\Http\Controllers\Web\FrontendProgramController::class, 'show'])->name('web.programs.show');

    Route::get('/impact', \App\Http\Controllers\Web\FrontendImpactController::class)->name('web.impact');
    Route::get('/team', \App\Http\Controllers\Web\FrontendTeamController::class)->name('web.team');

    Route::get('/stories', \App\Http\Controllers\Web\FrontendStoryController::class)->name('web.stories');

    Route::get('/partners', \App\Http\Controllers\Web\FrontendPartnerController::class)->name('web.partners');

    Route::get('/news', [\App\Http\Controllers\Web\FrontendNewsController::class, 'index'])->name('web.news.index');
    Route::get('/news/{slug}', [\App\Http\Controllers\Web\FrontendNewsController::class, 'show'])->name('web.news.show');

    Route::get('/donate', [\App\Http\Controllers\Web\FrontendSupportController::class, 'donate'])->name('web.donate');
    Route::get('/volunteer', [\App\Http\Controllers\Web\FrontendSupportController::class, 'volunteer'])->name('web.volunteer');

    // Nouvelle route pour les réseaux sociaux
    Route::get('/social', \App\Http\Controllers\Web\FrontendSocialController::class)->name('web.social');

    Route::get('/contact', [\App\Http\Controllers\Web\FrontendContactController::class,'show'])->name('web.contact');
    Route::post("/contact", [\App\Http\Controllers\Web\FrontendContactController::class,'store'])->name("web.contact.store");
});
