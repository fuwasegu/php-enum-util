<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil\Tests;

use Fuwasegu\PhpEnumUtil\Tests\Enums\Capital;
use PHPUnit\Framework\TestCase;

class HasNamesTest extends TestCase
{
    public function test(): void
    {
        $this->assertSame(
            ['TOKYO', 'BEIJING', 'WASHINGTON', 'LONDON'],
            Capital::names(),
        );

        $this->assertSame(
            'TOKYO,BEIJING,WASHINGTON,LONDON',
            Capital::implodeNames(','),
        );
    }
}
