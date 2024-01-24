<?php

namespace Squire\Rules;

use Illuminate\Database\Eloquent\Builder;
use Squire\Models;
use Squire\Rule;

class StationRule extends Rule
{
    protected string $message = 'squire-stations::validation.station';

    protected function getQueryBuilder(): Builder
    {
        return Models\Station::query();
    }
}
