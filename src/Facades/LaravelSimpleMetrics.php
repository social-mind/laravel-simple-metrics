<?php

namespace SocialMind\LaravelSimpleMetrics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SocialMind\LaravelSimpleMetrics\LaravelSimpleMetrics
 */
class LaravelSimpleMetrics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SocialMind\LaravelSimpleMetrics\LaravelSimpleMetrics::class;
    }
}
