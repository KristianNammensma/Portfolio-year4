<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Routing\Route;

class Navigation extends Component
{

    public function navigate($route)
    {
        return redirect()->route($route);
        
    }

    public function render()
    {
        $currentRoute = \Route::currentRouteName();

        return view('livewire.admin.navigation', compact( 'currentRoute'));
    }
}
