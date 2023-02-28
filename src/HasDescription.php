<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil;

trait HasDescription
{
    /**
     * Getter for Enum description
     */
    abstract public function description(): string;

    /**
     * Getter for Enum value and description maps
     *
     * @return array<int|string, string>
     */
    public static function descriptions(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_map(fn (self $e) => $e->description(), self::cases()),
        );
    }
}
