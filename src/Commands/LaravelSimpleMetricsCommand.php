<?php

namespace SocialMind\LaravelSimpleMetrics\Commands;

use Illuminate\Console\Command;

class LaravelSimpleMetricsCommand extends Command
{
    public $signature = 'laravel-simple-metrics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
