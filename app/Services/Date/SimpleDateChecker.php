<?php

namespace App\Services\Date;

use Carbon\Carbon;

class SimpleDateChecker implements DateChecker
{
    public function isAHoliday($date) : bool
    {
        $date = Carbon::parse($date);

        return $date->dayOfWeek == 0 || $date->dayOfWeek == 6;
    }
}
