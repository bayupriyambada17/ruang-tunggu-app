<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $password, $role;

    public function saveForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'peminjam',
            'verifikasi_date' => now(),
        ]);

        session()->flash('message', 'User berhasil dibuat.');
        return  redirect()->route('user.index');
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.user.create')->layout('components.layouts.cms');
    }
}
