<?php

namespace App\Policies;

use App\OrderVariation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderVariationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\OrderVariation  $orderVariation
     * @return mixed
     */
    public function view(User $user, OrderVariation $orderVariation)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\OrderVariation  $orderVariation
     * @return mixed
     */
    public function update(User $user, OrderVariation $orderVariation)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\OrderVariation  $orderVariation
     * @return mixed
     */
    public function delete(User $user, OrderVariation $orderVariation)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\OrderVariation  $orderVariation
     * @return mixed
     */
    public function restore(User $user, OrderVariation $orderVariation)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\OrderVariation  $orderVariation
     * @return mixed
     */
    public function forceDelete(User $user, OrderVariation $orderVariation)
    {
        //
    }
}
