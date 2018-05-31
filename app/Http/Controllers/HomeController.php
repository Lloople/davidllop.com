<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;
use Spatie\Sheets\Sheets;

class HomeController
{
    public function index(Sheets $sheets): View
    {
        $posts = $sheets->all()->sortByDesc('date');

        $paginatedPosts = new LengthAwarePaginator(
            $posts->forPage(Paginator::resolveCurrentPage(), 3),
            $posts->count(),
            3,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('home')
            ->with('posts', $paginatedPosts);
    }
}
