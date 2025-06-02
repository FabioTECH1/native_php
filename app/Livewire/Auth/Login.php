<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Native\Mobile\Events\Biometric\Completed;
use Native\Mobile\Facades\Dialog;
use Native\Mobile\Facades\System;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials, $this->remember)) {
            return redirect()->intended('/');
        }

        $this->addError('email', 'Invalid credentials.');
    }

    public function biometricLogin()
    {
        System::promptForBiometricID();
    }

    #[On('native:' . Completed::class)]
    public function handleBiometricAuth($success)
    {
        if ($success) {
            $user = User::first();   //only one user is assumed for simplicity
            Auth::login($user);
            Dialog::toast('Login successful!');
            return redirect()->intended('/');
        } else {
            // Dialog::alert('Login Failed', 'Biometric authentication failed. Please try again.');
            Dialog::toast('Biometric authentication failed. Please try again.');
        }
    }

    #[Layout('layouts.guest')]
    #[Title('Login | PHP Native Tester')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
