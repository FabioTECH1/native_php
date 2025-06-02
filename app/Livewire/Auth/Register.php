<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Native\Mobile\Events\Camera\PhotoTaken;
use Native\Mobile\Facades\System;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $enable_biometric = false;
    public $device_uuid = '';
    public $photoDataUrl = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();

        User::query()->delete();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'profile_image' => $this->photoDataUrl,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function imageUpload()
    {
        System::camera();
        return;
    }

    #[On('native:' . PhotoTaken::class)]
    public function handlePhotoTaken($path)
    {
        $this->validate([
            'photoDataUrl' => 'image|max:2048', // 2MB Max
        ]);
        $data   = base64_encode(file_get_contents($path));
        $mime   = mime_content_type($path);

        $this->photoDataUrl = "data:$mime;base64,$data";
    }


    #[Layout('layouts.guest')]
    #[Title('Register | PHP Native Tester')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
