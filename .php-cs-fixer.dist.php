<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor-bin/csfixer/vendor/autoload.php';
require_once './vendor/autoload.php';


use Nextcloud\CodingStandard\Config;

$config = new Config();
$config
    ->getFinder()
    ->ignoreVCSIgnored(true)
    ->notPath('build')
    ->notPath('l10n')
    ->notPath('src')
    ->notPath('vendor')
    ->in(__DIR__);
return $config;