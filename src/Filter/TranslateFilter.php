<?php

/*
 * This file is part of the umulmrum/holiday package.
 *
 * (c) Stefan Kruppa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace umulmrum\Holiday\Filter;

use umulmrum\Holiday\Model\Holiday;
use umulmrum\Holiday\Model\HolidayList;
use umulmrum\Holiday\Translator\TranslatorInterface;

final class TranslateFilter implements HolidayFilterInterface
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function filter(HolidayList $holidayList): void
    {
        $holidays = $holidayList->getList();

        foreach ($holidays as $index => $holiday) {
            $holidayList->replaceByIndex(
                $index,
                Holiday::create(
                    $this->translator->translate($holiday->getName()),
                    $holiday->getSimpleDate(),
                    $holiday->getType()
                )
            );
        }
    }
}
