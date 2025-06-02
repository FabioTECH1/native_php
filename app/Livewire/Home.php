<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Native\Mobile\Events\Biometric\Completed;
use Native\Mobile\Events\Camera\PhotoTaken;
use Native\Mobile\Events\PushNotification\TokenGenerated;
use Native\Mobile\Facades\Dialog;
use Native\Mobile\Facades\System;

class Home extends Component
{

    public $images;

    public function mount()
    {
        $this->images = User::find(Auth::id())->images()->get();
    }

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
        Dialog::alert('Alert', 'This is an alert message!', 'llll', 'kkkkk');
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
        return redirect()->route('home');
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

    public function camera()
    {
        System::camera();
        return redirect()->route('home');
    }

    #[On('native:' . PhotoTaken::class)]
    public function handlePhotoTaken($path)
    {
        $data   = base64_encode(file_get_contents($path));
        $mime   = mime_content_type($path);

        $photoDataUrl = "data:$mime;base64,$data";

        $user = User::find(Auth::id());
        $user->images()->create([
            'data_url' => $photoDataUrl,
        ]);
        return redirect()->route('home');
    }

    public function enrollForPushNotifications()
    {
        System::enrollForPushNotifications();
        return redirect()->route('home');
    }

    #[On('native:' . TokenGenerated::class)]
    public function handlePushNotifications(string $token)
    {
        Dialog::toast("Push Notification Token: $token");
        return redirect()->route('home');
    }
}
