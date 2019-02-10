<?php

use Illuminate\Foundation\Inspiring;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('bin:refresh', function () {
	$this->comment(Inspiring::quote());
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
})->describe('Refresh app');

Artisan::command('bin:live_refresh', function () {
	SSH::into('production')->run(array(
		'ls'
	),function($line)
{
    echo $line.PHP_EOL;
});
})->describe('Update in live');