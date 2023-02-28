<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests;

use Fuwasegu\PhpEnumUtil\Tests\Enums\Capital;
use Fuwasegu\PhpEnumUtil\Tests\Enums\Status;
use PHPUnit\Framework\TestCase;

class HasValuesTest extends TestCase
{
    public function test_int_backed_enum(): void
    {
        $this->assertSame(
            [1, 2, 3, 4],
            Capital::values(),
        );

        $this->assertSame(
            '1,2,3,4',
            Capital::implodeValues(','),
        );
    }

    public function test_string_backed_enum(): void
    {
        $this->assertSame(
            ['active', 'inactive', 'retired'],
            Status::values(),
        );

        $this->assertSame(
            'active,inactive,retired',
            Status::implodeValues(','),
        );
    }
}
