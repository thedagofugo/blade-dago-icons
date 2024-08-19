<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->notPath('vendor')
    ->in(getcwd(). '/src')
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new Config())
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        // Agrega más reglas aquí según sea necesario
    ])
    ->setFinder($finder);
