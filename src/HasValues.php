<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil;

trait HasValues
{
    /**
     * Getter for Enum values
     *
     * @return int[]|string[]
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Join Enum values with a string
     */
    public static function implodeValues(string $separator): string
    {
        return implode($separator, self::values());
    }
}
