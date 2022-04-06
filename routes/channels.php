<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Broadcast;

=======
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
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
Broadcast::channel('App.User.{id}', function ($user, $id) {
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
    return (int) $user->id === (int) $id;
});
