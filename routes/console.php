<?php

use Illuminate\Foundation\Inspiring;
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
=======
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451

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
<<<<<<< HEAD
})->purpose('Display an inspiring quote');
=======
})->describe('Display an inspiring quote');
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
