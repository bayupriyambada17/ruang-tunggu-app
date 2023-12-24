<?php

use App\Livewire\Aplikasi\Template\Pages;
use App\Livewire\Aplikasi\Template\Pages\Auth\Login;
use App\Livewire\Aplikasi\Template\Pages\Cms\Dashboard;
use App\Livewire\Aplikasi\Template\Pages\Cms\Ruang\Index as RuangIndex;
use App\Livewire\Aplikasi\Template\Pages\Cms\Ruang\Create as RuangCreate;
use App\Livewire\Aplikasi\Template\Pages\Cms\Ruang\Edit as RuangEdit;
use App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang\Index as subRuangIndex;
use App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang\Edit as subRuangEdit;
use App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang\Create as subRuangCreate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", Pages::class)->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get("/auth/masuk", Login::class)->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get("/cms/dashboard", Dashboard::class)->name('dashboard');
    Route::get("/cms/ruang", RuangIndex::class)->name('ruang.index');
    Route::get("/cms/ruang/tambah", RuangCreate::class)->name('ruang.create');
    Route::get("/cms/ruang/{nama_ruangan}/ubah", RuangEdit::class)->name('ruang.edit');

    Route::get("/cms/sub-ruang", subRuangIndex::class)->name('subruang.index');
    Route::get("/cms/sub-ruang/tambah", subRuangCreate::class)->name('subruang.create');
    Route::get("/cms/sub-ruang/{nama_sub_ruang}/ubah", subRuangEdit::class)->name('subruang.edit');
});
