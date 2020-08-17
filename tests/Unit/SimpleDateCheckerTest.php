<?php

namespace Tests\Unit;

use App\Services\Date\DateChecker;
use App\Services\Date\SimpleDateChecker;
use PHPUnit\Framework\TestCase;

class SimpleDateCheckerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testItIsADateChecker()
    {
        $dateChecker = new SimpleDateChecker;

        $this->assertTrue($dateChecker instanceof DateChecker);
    }

    public function testItCanDetermineADateIsAHoliday()
    {
        $dateChecker = new SimpleDateChecker;

        $shouldNotBeAHoliday = $dateChecker->isAHoliday('2020-07-24');
        $shouldBeAHoliday = $dateChecker->isAHoliday('2020-07-25');

        $this->assertFalse($shouldNotBeAHoliday);
        $this->assertTrue($shouldBeAHoliday);
    }
}
