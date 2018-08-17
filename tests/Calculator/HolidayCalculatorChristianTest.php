<?php


namespace umulmrum\Holiday\Calculator;


use umulmrum\Holiday\Provider\HolidayInitializerInterface;
use umulmrum\Holiday\Provider\Religion\ChristianHolidays;

final class HolidayCalculatorChristianTest extends AbstractHolidayCalculatorTest
{
    public function getData(): array
    {
        return [
            '2018' => [
                2018,
                'foo',
                [
                    '2018-01-06',
                    '2018-03-30',
                    '2018-04-01',
                    '2018-04-02',
                    '2018-05-10',
                    '2018-05-20',
                    '2018-05-21',
                    '2018-05-31',
                    '2018-08-15',
                    '2018-10-31',
                    '2018-11-01',
                    '2018-11-21',
                    '2018-12-25',
                    '2018-12-26',
                ],
            ],
            '2000' => [
                2000,
                'foo',
                [
                    '2000-01-06',
                    '2000-04-21',
                    '2000-04-23',
                    '2000-04-24',
                    '2000-06-01',
                    '2000-06-11',
                    '2000-06-12',
                    '2000-06-22',
                    '2000-08-15',
                    '2000-10-31',
                    '2000-11-01',
                    '2000-11-22',
                    '2000-12-25',
                    '2000-12-26',
                ],
            ],
            '1899' => [
                1899,
                'foo',
                [
                    '1899-01-06',
                    '1899-03-31',
                    '1899-04-02',
                    '1899-04-03',
                    '1899-05-11',
                    '1899-05-21',
                    '1899-05-22',
                    '1899-06-01',
                    '1899-08-15',
                    '1899-10-31',
                    '1899-11-01',
                    '1899-11-22',
                    '1899-12-25',
                    '1899-12-26',
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getHolidayInitializer(): HolidayInitializerInterface
    {
        /**
         * {@inheritdoc}
         */
        return new class implements HolidayInitializerInterface
        {
            /**
             * {@inheritdoc}
             */
            public function initializeHolidays(HolidayCalculator $holidayCalculator): void
            {
                $holidayCalculator->addHolidayProvider(new class extends ChristianHolidays
                {
                    public function getId(): string
                    {
                        return 'foo';
                    }
                });
            }
        };
    }
}