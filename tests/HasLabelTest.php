<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests;

use Fuwasegu\PhpEnumUtil\Tests\Enums\Capital;
use PHPUnit\Framework\TestCase;

class HasLabelTest extends TestCase
{
    public function test_label(): void
    {
        $this->assertSame(
            'Tokyo',
            Capital::TOKYO->label(),
        );

        $this->assertSame(
            'Beijing',
            Capital::BEIJING->label(),
        );

        $this->assertSame(
            'Washington',
            Capital::WASHINGTON->label(),
        );

        $this->assertSame(
            'London',
            Capital::LONDON->label(),
        );
    }

    public function test_labels(): void
    {
        $this->assertSame(
            [
                1 => 'Tokyo',
                2 => 'Beijing',
                3 => 'Washington',
                4 => 'London',
            ],
            Capital::labels(),
        );
    }
}
