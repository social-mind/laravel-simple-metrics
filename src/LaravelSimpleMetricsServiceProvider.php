<?php

namespace SocialMind\LaravelSimpleMetrics;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SocialMind\LaravelSimpleMetrics\Commands\LaravelSimpleMetricsCommand;

class LaravelSimpleMetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-simple-metrics')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-simple-metrics_table')
            ->hasCommand(LaravelSimpleMetricsCommand::class);
    }
}
