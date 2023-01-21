<?php

use App\Http\Livewire\User\Index;
use App\Http\Livewire\User\UserOps;

Route::get('/', Index::class);
Route::get('/create', UserOps::class);
