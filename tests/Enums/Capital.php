<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests\Enums;

use Fuwasegu\PhpEnumUtil\HasLabel;
use Fuwasegu\PhpEnumUtil\HasValues;

enum Capital: int
{
    use HasLabel;
    use HasValues;

    case TOKYO = 1;

    case BEIJING = 2;

    case WASHINGTON = 3;

    case LONDON = 4;

    public function label(): string
    {
        return match ($this) {
            self::TOKYO => 'Tokyo',
            self::BEIJING => 'Beijing',
            self::WASHINGTON => 'Washington',
            self::LONDON => 'London',
        };
    }
}
