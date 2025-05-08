<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/Tests',
        __DIR__ . '/YaLinqo',
    ])
    // uncomment to reach your current PHP version
    // ->withPhpSets()
        ->withPhpSets(php83: true)
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(10)
    ->withCodeQualityLevel(0);
