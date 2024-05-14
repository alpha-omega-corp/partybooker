<?php


use App\Livewire\CreateCaterer;
use App\Livewire\CreateEntertainment;
use App\Livewire\CreateEquipment;
use App\Livewire\CreateEvent;
use App\Livewire\CreateWine;

Route::name('partner.advert.service.')
    ->prefix('/service/{advert}')
    ->group(function () {
        Route::get('/wine', CreateWine::class)->name('wine');
        Route::get('/event', CreateEvent::class)->name('event');
        Route::get('/caterer', CreateCaterer::class)->name('caterer');
        Route::get('/equipment', CreateEquipment::class)->name('equipment');
        Route::get('/entertainment', CreateEntertainment::class)->name('entertainment');
    });
