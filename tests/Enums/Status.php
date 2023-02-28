<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests\Enums;

use Fuwasegu\PhpEnumUtil\HasDescription;
use Fuwasegu\PhpEnumUtil\HasValues;

enum Status: string
{
    use HasDescription;
    use HasValues;

    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case RETIED = 'retired';

    public function description(): string
    {
        return match ($this) {
            self::ACTIVE => 'State in which the employee is enrolled.',
            self::INACTIVE => 'State in which the employee is on administrative leave.',
            self::RETIED => 'State in which employee is retiring.',
        };
    }
}
