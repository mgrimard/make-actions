<?php

namespace Mgrimard\MakeActions\Tests;

use Mgrimard\MakeActions\MakeActionServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase {
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MakeActionServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetup($app)
    {
        //
    }
}