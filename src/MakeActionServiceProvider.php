<?php

namespace Mgrimard\MakeActions;

use Illuminate\Support\ServiceProvider;
use Mgrimard\MakeActions\Console\MakeActionCommand;

class MakeActionServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeActionCommand::class,
            ]);
        }
    }
}