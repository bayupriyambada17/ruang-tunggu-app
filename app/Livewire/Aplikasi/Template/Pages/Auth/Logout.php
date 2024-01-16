<?php

namespace App\Livewire\Aplikasi\Template\Pages\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.auth.logout')->layout('components.layouts.cms');
    }
}
