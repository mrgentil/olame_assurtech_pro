<?php

namespace App\Providers;

use App\Charts\AdminRegulateurChart;
use App\Charts\AdminRegulateurPeriodeChart;
use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // ...

    /**
     * Bootstrap any application services.
     */
    public function boot(Charts $charts)
    {
        $charts->register([
            AdminRegulateurChart::class,
            AdminRegulateurPeriodeChart::class
        ]);
        Carbon::setLocale('fr');
    }
}
