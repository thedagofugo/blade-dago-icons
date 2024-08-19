<?php

use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;
use Codeat3\BladeIconGeneration\IconProcessor;


$svgNormalization = static function (string $tempFilepath, array $iconSet, SplFileInfo $file) {

    // perform generic optimizations
    $iconProcessor = new IconProcessor($tempFilepath, $iconSet, $file);
    $iconProcessor
        ->convertStyleToInline()
        ->optimize()
        ->postOptimizationAsString(function ($svgLine) {
            return str_replace([
                'fill: #090909',
                'fill:#040602',
                'fill: #1d1d1d',
                'fill:#000000',
                'fill: #1c1c1c',
                'fill: #000000',
                'fill: #272425',
                'fill: #241f20',
                'fill:#231F20',
                'fill: #171717',
                'fill: #2c2c2b',
            ], 'fill:currentColor', $svgLine);
        })
        ->save();
};

return [
    [ // Regular Outline...
        'source' => __DIR__.'/../dist/packages/icons/src/svg/32',
        'destination' => __DIR__.'/../resources/svg',
        'safe' => true,
    ],
];