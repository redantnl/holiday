<?php

/*
 * This file is part of the umulmrum/holiday package.
 *
 * (c) Stefan Kruppa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umulmrum\Holiday\Calculator;

use umulmrum\Holiday\HolidayTestCase;
use umulmrum\Holiday\Model\HolidayList;
use umulmrum\Holiday\Provider\HolidayInitializerInterface;

abstract class AbstractHolidayCalculatorTest extends HolidayTestCase
{
    /**
     * @var HolidayCalculator
     */
    protected $holidayCalculator;
    /**
     * @var HolidayList
     */
    protected $actualResult;

    /**
     * @test
     * @dataProvider getData
     *
     * @param int    $year
     * @param string $location
     * @param array  $expectedResult
     */
    public function it_computes_the_correct_holidays(int $year, string $location, array $expectedResult): void
    {
        $this->givenAHolidayCalculator();
        $this->whenICallCalculateHolidaysForYear($year, $location);
        $this->thenTheCorrectHolidaysShouldBeCalculated($expectedResult);
    }

    abstract public function getData(): array;

    private function givenAHolidayCalculator(): void
    {
        $this->holidayCalculator = new HolidayCalculator($this->getHolidayInitializer());
    }

    abstract protected function getHolidayInitializer(): HolidayInitializerInterface;

    protected function whenICallCalculateHolidaysForYear(int $year, string $location): void
    {
        $this->actualResult = $this->holidayCalculator->calculateHolidaysForYear($year, $location);
    }

    protected function thenTheCorrectHolidaysShouldBeCalculated(array $expectedResult): void
    {
        $actualResult = [];
        foreach ($this->actualResult->getList() as $actualHoliday) {
            $actualResult[] = $actualHoliday->getFormattedDate('Y-m-d');
        }
        sort($actualResult);
        $this->assertEquals($expectedResult, $actualResult);
    }
}
