<?php

use App\Livewire\CreateEventPlace;

Route::get('/{advertId}/event-place', CreateEventPlace::class)->name('create-event-place');
