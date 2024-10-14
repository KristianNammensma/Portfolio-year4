<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $cards = [
        ['title' => 'Frontend', 'image' => './css/image/frontend.jpg'],
        ['title' => 'Gaming', 'image' => './css/image/gaming.jpg'],
        ['title' => 'App', 'image' => './css/image/app.jpg'],
    ];

    
    public function goToCv()
    {
        return redirect()->route('Cv');
    }

    public function route($route)
    {
        return redirect()->route("$route");
    }

    public function render()
    {
        return view('livewire.admin.home');
    }
}
