<?php

/*
 * This file is part of Laravel Timezones.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Timezones\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    protected $fillable = [
        'hashid', 'value', 'abbr', 'offset', 'isdst', 'text', 'utc',
    ];

    protected $casts = [
        'utc' => 'array',
    ];
}
