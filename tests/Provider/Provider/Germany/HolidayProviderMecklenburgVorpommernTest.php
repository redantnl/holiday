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

use umulmrum\Holiday\Provider\Germany\MecklenburgVorpommern;

class HolidayProviderMecklenburgVorpommernTest extends AbstractHolidayCalculatorTest
{
    /**
     * {@inheritdoc}
     */
    protected function getHolidayProviders(): array
    {
        return [
            new MecklenburgVorpommern(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getData(): array
    {
        return [
            [
                2020,
                [
                    '2020-01-01',
                    '2020-04-10',
                    '2020-04-12',
                    '2020-04-13',
                    '2020-05-01',
                    '2020-05-21',
                    '2020-05-31',
                    '2020-06-01',
                    '2020-10-03',
                    '2020-10-31',
                    '2020-11-18',
                    '2020-12-25',
                    '2020-12-26',
                ],
            ],
        ];
    }
}
