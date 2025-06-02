<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

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

    #[Layout('layouts.guest')]
    #[Title('Login | PHP Native Tester')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
