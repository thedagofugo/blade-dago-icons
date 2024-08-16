<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

// Configura el Finder para localizar los archivos PHP que se deben analizar
$finder = Finder::create()
    ->notPath('vendor') // Excluye la carpeta vendor
    ->in(__DIR__ . '/src') // Incluye la carpeta src
    ->name('*.php') // Analiza solo archivos PHP
    ->ignoreDotFiles(true) // Ignora archivos ocultos
    ->ignoreVCS(true); // Ignora archivos en repositorios VCS

// Configura las reglas de PHP CS Fixer
return (new Config())
    ->setRules([
        '@PSR2' => true,
        // Agrega o ajusta las reglas que necesites aquí
    ])
    ->setFinder($finder);
