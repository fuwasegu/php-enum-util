<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests;

use Fuwasegu\PhpEnumUtil\Tests\Enums\Status;
use PHPUnit\Framework\TestCase;

class ComparableTest extends TestCase
{
    public function test_is(): void
    {
        $maybeActive = Status::ACTIVE;
        $this->assertTrue(Status::ACTIVE->is($maybeActive));
        $this->assertFalse(Status::INACTIVE->is($maybeActive));
    }

    public function test_isNot(): void
    {
        $maybeActive = Status::ACTIVE;
        $this->assertFalse(Status::ACTIVE->isNot($maybeActive));
        $this->assertTrue(Status::INACTIVE->isNot($maybeActive));
    }

    public function test_isFrom(): void
    {
        $value = 'active';
        $this->assertTrue(Status::ACTIVE->isFrom($value));
        $this->assertFalse(Status::INACTIVE->isFrom($value));
        $this->assertFalse(Status::ACTIVE->isFrom('foo'));
    }

    public function test_isNotFrom(): void
    {
        $value = 'active';
        $this->assertFalse(Status::ACTIVE->isNotFrom($value));
        $this->assertTrue(Status::INACTIVE->isNotFrom($value));
        $this->assertTrue(Status::ACTIVE->isNotFrom('foo'));
    }
}
