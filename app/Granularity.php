<?php

declare(strict_types=1);

/**
 * @method static Granularity QUARTER_HOUR()
 */
abstract class Granularity extends Enum
{
    private const QUARTER_HOUR = 'HQ';

    protected static function provideInstances(): array
    {
        return [

            new class(self::QUARTER_HOUR) extends Granularity {
                public function getTitle(): string
                {
                    return _('15 minut');
                }
            },
        ];
    }

    abstract public function getTitle(): string;

}
