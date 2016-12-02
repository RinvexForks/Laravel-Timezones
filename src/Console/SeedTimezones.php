<?php

/*
 * This file is part of Laravel Timezones.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Timezones\Console;

use BrianFaust\Timezones\Timezone;
use DB;
use Illuminate\Console\Command;

class SeedTimezones extends Command
{
    protected $signature = 'timezones:seed';

    protected $description = 'Command description.';

    public function fire()
    {
        DB::table('timezones')->delete();

        $data = base_path('vendor/faustbrian/laravel-timezones/resources/timezones.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($data as $country) {
            Timezone::create($country);
        }

        $this->getOutput()->writeln('<info>Seeded:</info> Timezones');
    }
}
