<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
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
        return;
    }

    public function flashlight()
    {
        System::flashlight();
        return;
    }

    public function toast()
    {
        Dialog::toast('Hello, this is a toast message!');
        return;
    }

    public function alert()
    {
        Dialog::alert('Alert', 'This is an alert message!');
        return;
    }

    public function share()
    {
        Dialog::share('Check out this awesome content!', 'PHP Native Tester', 'https://nativephp.com/');
        return;
    }
}
