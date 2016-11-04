<?php

namespace BrianFaust\Timezones;

use BrianFaust\ServiceProvider\ServiceProvider as BaseProvider;
use BrianFaust\Timezones\Console\SeedTimezones;

class ServiceProvider extends BaseProvider
{
    public function boot()
    {
        $this->publishMigrations();
    }

    public function register()
    {
        parent::register();

        $this->commands([SeedTimezones::class]);
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['command.timezones.seed']);
    }

    public function getPackageName()
    {
        return 'timezones';
    }
}
