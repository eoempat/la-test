<?php

namespace App\Services\Date;

interface DateChecker
{
    public function isAHoliday($date) : bool;
}
