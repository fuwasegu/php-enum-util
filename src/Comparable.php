<?php

declare(strict_types=1);

namespace Fuwasegu\PhpEnumUtil;

trait Comparable
{
    public function is(self $enum): bool
    {
        return $this === $enum;
    }

    public function isNot(self $enum): bool
    {
        return !$this->is($enum);
    }

    public function isFrom(int|string $value): bool
    {
        return !is_null($enum = self::tryFrom($value)) && $this->is($enum);
    }

    public function isNotFrom(int|string $value): bool
    {
        return !$this->isFrom($value);
    }
}
