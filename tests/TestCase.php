<?php

namespace Mgrimard\MakeActions\Tests;

use Mgrimard\MakeActions\MakeActionsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase {
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MakeActionsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetup($app)
    {
        //
    }
}