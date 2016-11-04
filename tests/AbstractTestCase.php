<?php

namespace BrianFaust\Tests\Timezones;

use BrianFaust\Timezones\ServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return ServiceProvider::class;
    }
}
