<?php

namespace Rappasoft\LaravelLivewireTables\Plugins\Filters\DateFilter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class DateFilterServiceProvider extends ServiceProvider  implements DeferrableProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            if (class_exists(\Illuminate\Foundation\Console\AboutCommand::class) && class_exists(\Composer\InstalledVersions::class)) {
                \Illuminate\Foundation\Console\AboutCommand::add('Rappasoft Laravel Livewire Tables - Date Filter', [
                    'Version' => \Composer\InstalledVersions::getPrettyVersion('lrljoe/laravel-livewire-tables-datefilter'),
                ]);
            }
        }

    }


    public function register(): void
    {

    }
}