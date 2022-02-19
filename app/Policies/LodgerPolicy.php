<?php

namespace App\Policies;

use TCG\Voyager\Contracts\User;
use App\Lodger;
use Illuminate\Auth\Access\HandlesAuthorization;
use TCG\Voyager\Policies\BasePolicy;

class LodgerPolicy extends BasePolicy
{
    use HandlesAuthorization;
    public function browse(User $user, $lodger)
    {
        return true;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    /*public function viewAny(User $user)
    {
        return $lodger->logged_user_id === $user->vendor_id || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Lodger  $lodger
     * @return \Illuminate\Auth\Access\Response|bool
     *
    public function view(User $user, $lodger)
    {
       return $lodger->logged_user_id === $user->vendor_id || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Lodger  $lodger
     * @return \Illuminate\Auth\Access\Response|bool
     
    public function update(User $user, $lodger)
    {
        return $lodger->hotel_id === $vendor_id || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Lodger  $lodger
     * @return \Illuminate\Auth\Access\Response|bool
     
    public function delete(User $user, $lodger)
    {
        return $lodger->hotel_id === $user->vendor_id || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Lodger  $lodger
     * @return \Illuminate\Auth\Access\Response|bool
     
    public function restore(User $user, $lodger)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Lodger  $lodger
     * @return \Illuminate\Auth\Access\Response|bool
     
    public function forceDelete(User $user, $lodger)
    {
        return $lodger->hotel_id === $user->vendor_id || $user->hasRole('admin');
    }*/
}
