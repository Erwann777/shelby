<?php

use App\Http\Controllers\RsvpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RsvpController::class, 'index']);
Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');
Route::post('/rsvp/gate-entry', [RsvpController::class, 'gateEntry'])->name('rsvp.gate_entry');
Route::get('/guests', [RsvpController::class, 'guests'])->name('guests');
