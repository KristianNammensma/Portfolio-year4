<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Recent extends Component
{
    public $skills = [
        ['description' => 'Mijn eerste bijbaan was Subway in Heerenveen. Hier heb ik voor een aantal maanden gewerkt vanaf dat ik 15 was tot net na mijn 16e verjaardag. Ik werkte hier als medewerker binnen en een klein tijdje als fietsbezorger. Hierna ging de Subway die er zat falliet en kwam er een nieuwe voor in de plaats.', 'imagePath' => 'subway.jpg', 'timeLine' => '07-07-2021 / 25-11-2021'],
        ['description' => 'Na Subway ben ik over gegaan naar Dominos als fietsbezorger. Dominos was wel hele andere koek dan Subway wegens de drukte, maar ook het feit dat ik nooit wist hoelaat ik klaar ben. Hier heb ik bijna een heel jaar gewerkt totaan de zomervakantie. Toen was het tijd voor mij voor een nieuwe baan.', 'imagePath' => 'dominos.jpg', 'timeLine' => '19-12-2021 / 01-07-2022'],
        ['description' => 'Pokeguy werk ik tot heden toe. Ik werk hier als fietsbezorger, maar ook als chef in de keuken. Het is tot nu toe het leukste werk dat ik gedaan heb. Pokeguy is namelijk een soort familie bedrijf waar ik alle medewerkers jaren lang ken, en ook goede vrienden van mij zijn.', 'imagePath' => 'pokeguy.png', 'timeLine' => '30-08-2022 / heden'],
    ];
    public function render()
    {
        return view('livewire.admin.recent');
    }
}
