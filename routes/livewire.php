<?php

use App\Livewire\CreateCaterer;
use App\Livewire\CreateEntertainment;
use App\Livewire\CreateEquipment;
use App\Livewire\CreateEventPlace;
use App\Livewire\CreateWine;

Route::get('/{advertId}/event-place', CreateEventPlace::class)->name('create-event-place');
Route::get('/{advertId}/caterer', CreateCaterer::class)->name('create-caterer');
Route::get('/{advertId}/equipment', CreateEquipment::class)->name('create-equipment');
Route::get('/{advertId}/entertainment', CreateEntertainment::class)->name('create-entertainment');
Route::get('/{advertId}/wine', CreateWine::class)->name('create-wine');
