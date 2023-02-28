<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil;

trait HasNames
{
    /**
     * Getter for Enum names
     *
     * @return string[]
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    /**
     * Join Enum names with a string
     */
    public static function implodeNames(string $separator): string
    {
        return implode($separator, self::names());
    }
}
