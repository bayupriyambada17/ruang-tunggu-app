<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Edit extends Component
{
    public $userId, $name, $email, $password;
    public $user;

    public function mount($email)
    {
        $this->user = User::where('email', $email)->first();
        $this->userId = $this->user->id;
        $this->name = $this->user->name;
    }

    public function saveForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'verifikasi_date' => now(),
        ]);

        session()->flash('message', 'User berhasil diubah.');
        return  redirect()->route('user.index');
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.user.edit')->layout('components.layouts.cms');
    }
}
