<?php

namespace Grilar\ThemeGenerator\Providers;

use Grilar\Base\Supports\ServiceProvider;

class ThemeGeneratorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(CommandServiceProvider::class);
    }
}
