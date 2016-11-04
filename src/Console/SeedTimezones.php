<?php

namespace BrianFaust\Timezones\Console;

use DB;
use BrianFaust\Timezones\Models\Timezone;
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
