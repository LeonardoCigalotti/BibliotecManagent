<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Broadcast;

=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

<<<<<<< HEAD
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
=======
use Illuminate\Support\Facades\Broadcast;


Broadcast::channel('App.User.{id}', function ($user, $id) {
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
    return (int) $user->id === (int) $id;
});
