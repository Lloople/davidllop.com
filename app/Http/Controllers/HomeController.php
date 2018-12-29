<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Spatie\Sheets\Sheets;

class HomeController
{

    public function __invoke(Sheets $sheets): View
    {
        $posts = $sheets
            ->all()
            ->where('published', true)
            ->sortByDesc('date')
            ->paginate(3);

        return view('home')->with('posts', $posts);
    }
}
