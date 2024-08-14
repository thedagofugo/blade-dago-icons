<?php

declare(strict_types=1);

namespace BladeUI\Dagoicons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeDagoiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-dagoicons', []);

            $factory->add('Dagoicons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-dagoicons.php', 'blade-dagoicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-dagoicons'),
            ], 'blade-dagoicons');

            $this->publishes([
                __DIR__.'/../config/blade-dagoicons.php' => $this->app->configPath('blade-dagoicons.php'),
            ], 'blade-dagoicons-config');
        }
    }
}
