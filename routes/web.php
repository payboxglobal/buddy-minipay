<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Navigation;;


// Route::get('/', function () {
//     return view('livewire.dashboard');
// });

 Route::get('/', Dashboard::class);
 Route::get('dashboard', Dashboard::class);


Route::get('counter', Counter::class);


