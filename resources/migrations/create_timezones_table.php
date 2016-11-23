<?php

/*
 * This file is part of Laravel Timezones.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimezonesTable extends Migration
{
    public function up()
    {
        Schema::create('timezones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->string('abbr');
            $table->integer('offset');
            $table->boolean('isdst');
            $table->string('text');
            $table->json('utc');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('timezones');
    }
}
