<?php

namespace App\Livewire\Aplikasi\Template\Pages\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(array('email' => $this->email, 'password' => $this->password))) {
            if (auth()->user()->role === "operator") {
                return redirect(route('dashboard'));
            }
        }
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.auth.login')->layout('components.layouts.auth');
    }
}
