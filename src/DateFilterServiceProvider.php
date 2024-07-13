<?php

namespace Rappasoft\LaravelLivewireTables\Plugins\Filters\DateFilter;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;
use Livewire\ComponentHookRegistry;
use Rappasoft\LaravelLivewireTables\Commands\MakeCommand;
use Rappasoft\LaravelLivewireTables\Features\AutoInjectRappasoftAssets;
use Rappasoft\LaravelLivewireTables\Mechanisms\RappasoftFrontendAssets;
use Illuminate\Contracts\Support\DeferrableProvider;

class DateFilterServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {

        // Load Default Translations
        $this->loadJsonTranslationsFrom(
            __DIR__.'/../resources/lang'
        );

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'livewire-tables-datefilter');


    }

    public function provides(): array
    {
        return [DateFilter::class];
    }


    public function register(): void
    {
    }
}
