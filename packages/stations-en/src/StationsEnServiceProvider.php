<?php

namespace Squire;

use Illuminate\Support\ServiceProvider;
use Squire\Models\Station;

class StationsEnServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Repository::registerSource(Station::class, 'en', __DIR__ . '/../resources/data.csv');
    }
}
