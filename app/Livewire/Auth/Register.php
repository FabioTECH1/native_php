<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $enable_biometric = false;
    public $device_uuid = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'biometric_enabled' => $this->enable_biometric,
            'device_uuid' => $this->enable_biometric ? $this->device_uuid : null,
        ]);

        Auth::login($user);

        return redirect('/');
    }


    #[Layout('layouts.guest')]
    #[Title('Register | PHP Native Tester')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
