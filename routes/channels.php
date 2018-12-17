<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
<<<<<<< HEAD
 */

Broadcast::routes();
Broadcast::channel('employees', function ($user) {
    if ($user) {
        return true;
    }

=======
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
});
