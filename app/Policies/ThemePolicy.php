<?php

namespace App\Policies;

use App\User;
use App\Theme;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThemePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function update(User $user, Theme $theme)
    {
        return $user->id === $theme->user_id;
    }

    /**
     * Determine whether the user can delete the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function delete(User $user, Theme $theme)
    {
        return $user->id === $theme->user_id;
    }
}
