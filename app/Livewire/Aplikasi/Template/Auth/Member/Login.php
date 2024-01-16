<?php

namespace App\Livewire\Aplikasi\Template\Auth\Member;

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
            if (auth()->user()->role === "peminjam") {
                return redirect(route('member.dashboard.index'));
            }
        }
    }
    public function render()
    {
        return view('livewire.aplikasi.template.auth.member.login')->layout('components.layouts.auth');
    }
}
