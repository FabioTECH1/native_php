<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Profile extends Component
{
    #[Layout('layouts.auth')]
    #[Title('Profile | PHP Native Tester')]
    public function render()
    {
        return view('livewire.profile');
    }
}
