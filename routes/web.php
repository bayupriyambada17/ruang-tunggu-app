<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Aplikasi\Template\Pages;
use App\Livewire\Aplikasi\Template\Pages\Auth\Login;
use App\Livewire\Aplikasi\Template\Pages\Cms\Dashboard;
use App\Livewire\Aplikasi\Template\Pages\Cms\Ruang\Edit as RuangEdit;
use App\Livewire\Aplikasi\Template\Pages\Cms\Ruang\Index as RuangIndex;
use App\Livewire\Aplikasi\Template\Pages\Cms\Ruang\Create as RuangCreate;
use App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang\Edit as subRuangEdit;
use App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang\Index as subRuangIndex;
use App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang\Create as subRuangCreate;
use App\Livewire\Aplikasi\Template\Pages\Cms\Transaksi\Create;
use App\Livewire\Aplikasi\Template\Pages\Cms\Transaksi\Edit;
use App\Livewire\Aplikasi\Template\Pages\Cms\Transaksi\Index;
use App\Livewire\Aplikasi\Template\Pages\Cms\LaporanRuang\Index as LaporanRuangIndex;
use App\Livewire\Aplikasi\Template\Pages\Cms\LaporanRuang\Create as LaporanRuangCreate;
use App\Livewire\Aplikasi\Template\Pages\Cms\LaporanRuang\Edit as LaporanRuangEdit;
use App\Livewire\Aplikasi\Template\Pages\Cms\Pengaturan\Index as PengaturanIndex;


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

    Route::get("/cms/transaksi-ruang", Index::class)->name('transaksi.index');
    Route::get("/cms/transaksi-ruang/tambah", Create::class)->name('transaksi.create');
    Route::get("/cms/transaksi-ruang/{transaksiKodeId}/ubah", Edit::class)->name('transaksi.edit');

    Route::get("/cms/laporan-ruang", LaporanRuangIndex::class)->name('laporanRuang.index');
    Route::get("/cms/laporan-ruang/tambah", LaporanRuangCreate::class)->name('laporanRuang.create');
    Route::get("/cms/laporan-ruang/{laporanRuangId}/ubah", LaporanRuangEdit::class)->name('laporanRuang.edit');


    Route::get("/cms/pengaturan", PengaturanIndex::class)->name('settings.index');
});
