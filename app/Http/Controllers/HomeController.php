<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController
{
    public function index(): \Illuminate\View\View
    {
        $view = View::make('home');

        return $view;
    }
}
