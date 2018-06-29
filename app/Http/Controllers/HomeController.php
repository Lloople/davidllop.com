<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Spatie\Sheets\Sheets;

class HomeController
{
    public function index(Sheets $sheets): View
    {
        return view('home')->with('posts', $sheets->all()->sortByDesc('date')->paginate(3));
    }
}
