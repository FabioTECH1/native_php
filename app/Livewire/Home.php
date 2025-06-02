<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Native\Mobile\Events\Biometric\Completed;
use Native\Mobile\Facades\Dialog;
use Native\Mobile\Facades\System;

class Home extends Component
{
    #[Layout('layouts.auth')]
    #[Title('Home | PHP Native Tester')]
    public function render()
    {
        return view('livewire.home');
    }

    public function vibrate()
    {
        System::vibrate();
        return redirect()->route('home');
    }

    public function flashlight()
    {
        System::flashlight();
        return redirect()->route('home');
    }

    public function toast()
    {
        Dialog::toast('Hello, this is a toast message!');
        return redirect()->route('home');
    }

    public function alert()
    {
        Dialog::alert('Alert', 'This is an alert message!');
        return redirect()->route('home');
    }

    public function share()
    {
        Dialog::share('Check out this awesome content!', 'PHP Native Tester', 'https://nativephp.com/');
        return redirect()->route('home');
    }

    public function biometric()
    {
        System::promptForBiometricID();
    }

    #[On('native:' . Completed::class)]
    public function handleBiometricAuth($success)
    {
        if ($success) {
            Dialog::toast('Biometric authentication successful!');
        } else {
            Dialog::toast('Biometric authentication failed or not available.');
        }
        return redirect()->route('home');
    }
}
