<?php

declare(strict_types=1);

use App\Http\Livewire\Site\Home;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class);
