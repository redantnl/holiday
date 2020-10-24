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

use umulmrum\Holiday\Provider\Religion\ChristianHolidays;

final class HolidayCalculatorChristianTest extends AbstractHolidayCalculatorTest
{
    /**
     * {@inheritdoc}
     */
    protected function getHolidayProviders(): array
    {
        return [
            ChristianHolidays::class,
        ];
    }

    public function getData(): array
    {
        return [
            '2018' => [
                2018,
                [
                    '2018-01-06',
                    '2018-02-02',
                    '2018-02-14',
                    '2018-02-14',
                    '2018-03-19',
                    '2018-03-29',
                    '2018-03-30',
                    '2018-04-01',
                    '2018-04-02',
                    '2018-05-04',
                    '2018-05-10',
                    '2018-05-20',
                    '2018-05-21',
                    '2018-05-31',
                    '2018-06-29',
                    '2018-08-15',
                    '2018-09-08',
                    '2018-09-22',
                    '2018-10-31',
                    '2018-10-31',
                    '2018-11-01',
                    '2018-11-02',
                    '2018-11-11',
                    '2018-11-15',
                    '2018-11-21',
                    '2018-12-08',
                    '2018-12-24',
                    '2018-12-25',
                    '2018-12-26',
                ],
            ],
            '2000' => [
                2000,
                [
                    '2000-01-06',
                    '2000-02-02',
                    '2000-02-14',
                    '2000-03-08',
                    '2000-03-19',
                    '2000-04-20',
                    '2000-04-21',
                    '2000-04-23',
                    '2000-04-24',
                    '2000-05-04',
                    '2000-06-01',
                    '2000-06-11',
                    '2000-06-12',
                    '2000-06-22',
                    '2000-06-29',
                    '2000-08-15',
                    '2000-09-08',
                    '2000-09-22',
                    '2000-10-31',
                    '2000-10-31',
                    '2000-11-01',
                    '2000-11-02',
                    '2000-11-11',
                    '2000-11-15',
                    '2000-11-22',
                    '2000-12-08',
                    '2000-12-24',
                    '2000-12-25',
                    '2000-12-26',
                ],
            ],
            '1899' => [
                1899,
                [
                    '1899-01-06',
                    '1899-02-02',
                    '1899-02-14',
                    '1899-02-15',
                    '1899-03-19',
                    '1899-03-30',
                    '1899-03-31',
                    '1899-04-02',
                    '1899-04-03',
                    '1899-05-04',
                    '1899-05-11',
                    '1899-05-21',
                    '1899-05-22',
                    '1899-06-01',
                    '1899-06-29',
                    '1899-08-15',
                    '1899-09-08',
                    '1899-09-22',
                    '1899-10-31',
                    '1899-10-31',
                    '1899-11-01',
                    '1899-11-02',
                    '1899-11-11',
                    '1899-11-15',
                    '1899-11-22',
                    '1899-12-08',
                    '1899-12-24',
                    '1899-12-25',
                    '1899-12-26',
                ],
            ],
        ];
    }
}