<?php

namespace Schwarzer\PhpCs;

use function array_merge;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Styles
{
    public function __invoke(Finder $finder, array $rules = []): Config
    {
        $rules = array_merge(require __DIR__ . '/../rules.php', $rules);

        return (new Config)
            ->setFinder($finder)
            ->setRules($rules)
            ->setRiskyAllowed(true)
            ->setUsingCache(true);
    }

    public static function getConfig(Finder $finder, array $rules = []): Config
    {
        return (new self())($finder, $rules);
    }
}
