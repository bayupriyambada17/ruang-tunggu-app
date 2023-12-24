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
            // if (auth()->user()->roles == 1) {
            //     session()->flash('message', "You have been successfully login.");
            //     return redirect(route('rektor.dashboard'));
            // } else if (auth()->user()->roles == 2) {
            //     session()->flash('message', "You have been successfully login.");
            //     return redirect(route('dashboard'));
            // }
            // dd(auth()->user());
            return redirect(route('dashboard'));
        }
        // else {
        //     session()->flash('message', 'email and password are wrong.');
        //     return redirect(route('login'));
        // }
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.auth.login')->layout('components.layouts.auth');
    }
}
