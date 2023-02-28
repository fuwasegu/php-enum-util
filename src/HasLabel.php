<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil;

trait HasLabel
{
    /**
     * Getter for Enum label
     */
    abstract public function label(): string;

    /**
     * Getter for Enum value and label maps
     *
     * @return array<int|string, string>
     */
    public static function labels(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_map(fn (self $e) => $e->label(), self::cases()),
        );
    }
}
