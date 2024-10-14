<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\baseController;

class pageController extends baseController
{
    
    public function index()
    {
        return view('admin.base', [
            'title' => 'Home',
        ]);
    }

    public function burgerSchap()
    {
        return view('admin.burgerschap', [
            'title' => 'Burgerschap',
        ]);
    }

    public function Cv()
    {
        return view('admin.cv', [
            'title' => 'Cv',
        ]);
    }

    public function Frontend()
    {
        return view('admin.frontend', [
            'title' => 'Frontend',
        ]);
    }

    public function Gaming()
    {
        return view('admin.gaming', [
            'title' => 'Gaming',
        ]);
    }

    public function App()
    {
        return view('admin.app', [
            'title' => 'App',
        ]);
    }

}
