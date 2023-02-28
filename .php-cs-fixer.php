<?php

declare(strict_types=1);

use PhpCsFixer\Finder;
use YumemiInc\PhpCsFixerConfig\Config;

return (new Config())
    ->setFinder(
        (new Finder())
            ->in(__DIR__),
    );