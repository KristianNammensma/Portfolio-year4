<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class baseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $titles;

    public function __construct()
    {
        // Define the common titles array
        $this->titles = [
            ['name' => 'Home', 'icon' => 'fa fa-home'],
            ['name' => 'Burgerschap', 'icon' => 'fa fa-file-text-o'],
            // Add more items as necessary
        ];

        // Share the $titles with all views
        view()->share('titles', $this->titles);
    }
}