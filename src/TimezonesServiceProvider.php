<?php

/*
 * This file is part of Laravel Timezones.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Timezones;

use BrianFaust\ServiceProvider\ServiceProvider;
use BrianFaust\Timezones\Console\SeedTimezones;

class TimezonesServiceProvider extends ServiceProvider
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
