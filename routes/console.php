<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly()->appendOutputTo(storage_path('logs/cron/inspire.log'));

Schedule::command('horizon:snapshot')->everyFiveMinutes()->appendOutputTo(storage_path('logs/cron/horizon-snapshot.log'));;
Schedule::command('cache:prune-stale-tags')->hourly()->appendOutputTo(storage_path('logs/cron/cache-prune-stale-tags.log'));;

