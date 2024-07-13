<?php

namespace Rappasoft\LaravelLivewireTables\Plugins\Filters\DateFilter;

use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\Plugins\Filters\DateFilter\Helpers\DateFilterHelpers;

class DateFilter extends Filter
{
    use DateFilterHelpers;

    public string $wireMethod = 'live';

    protected string $view = 'laravel-livewire-tables-datefilter::date-filter';

    protected string $configPath = 'laravel-livewire-tables-datefilter.defaultConfig';


}
