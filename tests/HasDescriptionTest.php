<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests;

use Fuwasegu\PhpEnumUtil\Tests\Enums\Status;
use PHPUnit\Framework\TestCase;

class HasDescriptionTest extends TestCase
{
    public function test_description(): void
    {
        $this->assertSame(
            'State in which the employee is enrolled.',
            Status::ACTIVE->description(),
        );

        $this->assertSame(
            'State in which the employee is on administrative leave.',
            Status::INACTIVE->description(),
        );

        $this->assertSame(
            'State in which employee is retiring.',
            Status::RETIED->description(),
        );
    }

    public function test_descriptions(): void
    {
        $this->assertSame(
            [
                'active' => 'State in which the employee is enrolled.',
                'inactive' => 'State in which the employee is on administrative leave.',
                'retired' => 'State in which employee is retiring.',
            ],
            Status::descriptions(),
        );
    }
}
