<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController
{
    public function index(): View
    {
        return view('about');
    }
}
