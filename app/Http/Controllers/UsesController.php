<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UsesController
{
    public function __invoke(): View
    {
        return view('uses');
    }
}
