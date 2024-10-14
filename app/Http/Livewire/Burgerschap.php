<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Burgerschap extends Component
{
    public $documents = [
        'CONNECT' => [
            'name' => 'CONNECT', 
            'pdf' => 'docs/connect.pdf', 
            'text' => [
                'left' => 'CONNECT opdracht',
                'right' => "Gemaakt op: 29/03/2023, ".
                "Open dag waarbij software development studenten met bedrijven connecties kunnen leggen, maar ook kunnen zien wat andere bedrijven doen."
            ],
        ],
    ];

    public $selectedDocument;

    public function mount()
    {
        $this->selectedDocument = $this->documents['CONNECT'];
    }

    public function selectDocument($name)
    {
        $this->selectedDocument = collect($this->documents)->firstWhere('name', $name);

    }


    public function render()
    {
        return view('livewire.admin.burgerschap');
    }
}
