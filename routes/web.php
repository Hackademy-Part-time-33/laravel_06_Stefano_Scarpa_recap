<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('homepage');
Route::get('/servizi', [PageController::class, 'service'])->name('servizi');

Route::get('/detail/{dettaglio}', [PageController::class, 'servizio'])->name('servizio');

// rotte form
route::post('/send' , [PageController::class, 'send'])->name('send');
