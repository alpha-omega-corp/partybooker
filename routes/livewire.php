<?php

use App\Livewire\CreateCaterer;
use App\Livewire\CreateEntertainment;
use App\Livewire\CreateEquipment;
use App\Livewire\CreateEventPlace;
use App\Livewire\CreateWine;

Route::middleware(['advertisement'])->group(function () {
    Route::get('{partnerId}/{advertId}/event-place', CreateEventPlace::class)->name('create-event-place');
    Route::get('{partnerId}/{advertId}/caterer', CreateCaterer::class)->name('create-caterer');
    Route::get('{partnerId}/{advertId}/equipment', CreateEquipment::class)->name('create-equipment');
    Route::get('{partnerId}/{advertId}/entertainment', CreateEntertainment::class)->name('create-entertainment');
    Route::get('{partnerId}/{advertId}/wine', CreateWine::class)->name('create-wine');
});
