<?php

declare(strict_types=1);

namespace TheDagofugo\DagoIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeDagoIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-dago-icons', []);

            $factory->add('dago-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-dago-icons.php', 'blade-dago-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-dago-icons'),
            ], 'blade-dago-icons');

            $this->publishes([
                __DIR__.'/../config/blade-dago-icons.php' => $this->app->configPath('blade-dago-icons.php'),
            ], 'blade-dago-icons-config');
        }
    }
}
