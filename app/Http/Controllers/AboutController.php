<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\View\View;

class AboutController
{
    const GYM_SKIPPED = [
        ['2018-12-06', '2018-12-09'],
        ['2018-12-17', '2019-01-01']
    ];

    public function __invoke(): View
    {
        return view('about', ['gymDays' => $this->getGymDays()]);
    }

    private function getGymDays()
    {
        $begin = date('2018-10-01');

        $totalDaysSkipped = collect(self::GYM_SKIPPED)->reduce(function ($carry, $skipped) {

            $daysSkipped = is_array($skipped)
                ? Carbon::parse($skipped[0])->diffInDays($skipped[1])
                : 1;

            return $carry + $daysSkipped;
        }, 0);

        return now()->diffInDays($begin) - $totalDaysSkipped;

    }
}
