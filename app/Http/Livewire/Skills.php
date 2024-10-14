<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Skills extends Component
{

    public $skills = [
        ['description' => 'Html is de basistaal waar iedere student mee begonnen is. Html heb ik ook het meeste ervaring mee, omdat ik het het meest gebruikt heb in mijn opleiding. Samen gecombineerd met Css is de start geweest van mijn opleiding.', 'imagePath' => './css/image/skills/html.png', 'experience' => '100/100'],
        ['description' => 'JavaScript is de tweede taal die ik geleerd heb. Samen met HTML heb ik hier heel veel tijd in gestoken in mijn eerste en tweede jaar van mijn opleiding. Samen met Css Html is dit de basis van het leren van programmeren.', 'imagePath' => './css/image/skills/js.png', 'experience' => '70/100'],
        ['description' => 'Php werd voor mij al een stuk moeilijker. In tegestelling tot Html, Js en Css is dit een stuk meer backhand. Je ziet minder resultaten en meer gebeurt achter de schermen, maar naast al dit vind ik php een stuk leuker om te doen.', 'imagePath' => './css/image/skills/php.jpg', 'experience' => '89/100'],
        ['description' => 'Unity heb ik zelf niet super veel ervaring mee. Ik heb 2 grote projecten gemaakt met Unity, waaronder mijn keuzedeel en een game gemaakt in mijn vrije tijd. Hier heb ik ongeveer 5 tot 8 weken aan gewerkt in het tweede jaar.', 'imagePath' => './css/image/skills/unity.jpg', 'experience' => '50/100'],
        ['description' => 'Flutter is een app die ik gebruikt heb voor App development. Hiermee heb ik mijn twee apps gemaakt. Flutter vind ik wel een van de moeilijkste apps om te gebruiken. De layout en codetaal is moeilijk om op aan te passen.', 'imagePath' => './css/image/skills/flutter.png', 'experience' => '40/100'],
    ];
    public function render()
    {
        return view('livewire.admin.skills');
    }
}
