<?php

use App\Livewire\Aplikasi\Template\Auth\Member\Dashboard\Index as DashboardIndex;
use App\Livewire\Aplikasi\Template\Auth\Member\LaporkanRuang\Index as LaporkanRuangIndex;
use App\Livewire\Aplikasi\Template\Auth\Member\Login as MemberLogin;
use App\Livewire\Aplikasi\Template\Auth\Member\PinjamRuang\Index as PinjamRuangIndex;
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
use App\Livewire\Aplikasi\Template\Pages\Cms\User\Create as UserCreate;
use App\Livewire\Aplikasi\Template\Pages\Cms\User\Edit as UserEdit;
use App\Livewire\Aplikasi\Template\Pages\Cms\User\Index as UserIndex;
use App\Livewire\Aplikasi\Template\Pages\Harian;

Route::get("/", Pages::class)->name('home');
Route::get("/agenda/harian", Harian::class)->name('pages.harian');
Route::middleware(['guest'])->group(function () {
    Route::get("/auth/masuk", Login::class)->name('login');
    // Route::view('Pages.Front.Login')->name('member.login');
    Route::get('/member/login', MemberLogin::class)->name('member.login');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get("/dashboard", Dashboard::class)->name('dashboard');
        Route::get("/ruang", RuangIndex::class)->name('ruang.index');
        Route::get("/ruang/tambah", RuangCreate::class)->name('ruang.create');
        Route::get("/ruang/{nama_ruangan}/ubah", RuangEdit::class)->name('ruang.edit');

        Route::get("/sub-ruang", subRuangIndex::class)->name('subruang.index');
        Route::get("/sub-ruang/tambah", subRuangCreate::class)->name('subruang.create');
        Route::get("/sub-ruang/{nama_sub_ruang}/ubah", subRuangEdit::class)->name('subruang.edit');

        Route::get("/transaksi-ruang", Index::class)->name('transaksi.index');
        Route::get("/transaksi-ruang/tambah", Create::class)->name('transaksi.create');
        Route::get("/transaksi-ruang/{transaksiKodeId}/ubah", Edit::class)->name('transaksi.edit');

        Route::get("/user", UserIndex::class)->name('user.index');
        Route::get("/user/tambah", UserCreate::class)->name('user.create');
        Route::get("/user/{email}/ubah", UserEdit::class)->name('user.edit');

        Route::get("/laporan-ruang", LaporanRuangIndex::class)->name('laporanRuang.index');
        Route::get("/laporan-ruang/tambah", LaporanRuangCreate::class)->name('laporanRuang.create');
        Route::get("/laporan-ruang/{laporanRuangId}/ubah", LaporanRuangEdit::class)->name('laporanRuang.edit');
        Route::get("/pengaturan", PengaturanIndex::class)->name('settings.index');
    });
});

// route member

Route::middleware(['auth', 'isMember'])->group(function () {
    Route::prefix('member')->group(function () {
        Route::get("/dashboard", DashboardIndex::class)->name('member.dashboard.index');
        Route::get("/pinjam-ruang", PinjamRuangIndex::class)->name('member.pinjam.index');
        Route::get("/lapor-ruang", LaporkanRuangIndex::class)->name('member.lapor.index');
    });
});
