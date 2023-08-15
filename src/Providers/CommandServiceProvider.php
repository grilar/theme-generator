<?php

namespace Grilar\ThemeGenerator\Providers;

use Grilar\Base\Supports\ServiceProvider;
use Grilar\ThemeGenerator\Commands\ThemeCreateCommand;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ThemeCreateCommand::class,
            ]);
        }
    }
}
