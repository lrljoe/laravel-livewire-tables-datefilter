<?php

namespace Rappasoft\LaravelLivewireTables\Plugins\Filters\DateFilter\Helpers;

use DateTime;
use Rappasoft\LaravelLivewireTables\Views\Traits\Core\HasWireables;
use Rappasoft\LaravelLivewireTables\Views\Traits\Filters\{HasConfig, IsStringFilter};

trait DateFilterHelpers
{
    use HasWireables;
    use HasConfig;
    use IsStringFilter;
    
    public function getFilterPillValue(string $value): ?string
    {
        if ($this->validate($value)) {
            return DateTime::createFromFormat('Y-m-d', $value)->format($this->getConfig('pillFormat'));
        }

        return null;
    }

    public function validate(string $value): string|bool
    {
        if (DateTime::createFromFormat('Y-m-d', $value) === false) {
            return false;
        }

        return $value;
    }

}