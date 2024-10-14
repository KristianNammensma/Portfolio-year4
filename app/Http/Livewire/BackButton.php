<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BackButton extends Component
{

    public function return()
    {
        return redirect()->route('Home');
    }

    public function render()
    {
        $currentRoute = \Route::currentRouteName();
        return view('livewire.admin.back-button', compact( 'currentRoute'));
    }
}
