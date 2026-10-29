<?php

use App\Livewire\Login;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\TelaInicial;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class);

// PRODUTOS
Route::get('/produto/create', ProdutoCreate::class);
