<?php

namespace hankiao\FilamentGoogleAnalytics\Facades;

use hankiao\FilamentGoogleAnalytics\FilamentGoogleAnalytics as FGA;
use Illuminate\Support\Facades\Facade;

/**
 * @method static thousandsFormater()
 *
 * @see \hankiao\FilamentGoogleAnalytics\FilamentGoogleAnalytics
 */
class FilamentGoogleAnalytics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FGA::class;
    }
}
