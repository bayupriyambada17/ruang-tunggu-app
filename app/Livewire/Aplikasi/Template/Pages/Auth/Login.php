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
                // session()->flash('message', "You have been successfully login. (Operator)");
                // return redirect(route('rektor.dashboard'));
                dd("Kamu adalah operator");
            } else if (auth()->user()->role === "peminjam") {
                dd("Kamu adalah peminjam");
                // session()->flash('message', "You have been successfully login (Peminjam)");
                // return redirect(route('dashboard'));
            }
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
