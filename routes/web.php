<?php

declare(strict_types=1);

use App\Http\Livewire\Site\Home;
use App\Http\Livewire\Site\Projects;
use App\Http\Livewire\Site\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('site.home');
Route::get('/servicos', Services::class)->name('site.services');

Route::get('/projetos', Projects::class)->name('site.projects');
Route::get('/contato', fn () => 'Hello Contacts')->name('site.contacts');
