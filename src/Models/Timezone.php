<?php

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
