<?php

namespace App\Policies;

use App\Models\RoleUser;
use App\Models\TypeOfRepair;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TypeOfRepairControllerPolicy
{
    use HandlesAuthorization;

    protected $role;

    /**
     *
     */
    public function __construct()
    {
        $this->role = RoleUser::select('role_id')->where('user_id', \Auth::user()->id)->first();
    }

    /**
     * @return bool|Response
     */
    public function before()
    {
        if ($this->role->role_id === 4) {
            return true;
        }else {
            return Response::deny('У вас нет доступа к этой странице');
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TypeOfRepair  $typeOfRepair
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TypeOfRepair $typeOfRepair)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TypeOfRepair  $typeOfRepair
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TypeOfRepair $typeOfRepair)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TypeOfRepair  $typeOfRepair
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TypeOfRepair $typeOfRepair)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TypeOfRepair  $typeOfRepair
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TypeOfRepair $typeOfRepair)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TypeOfRepair  $typeOfRepair
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TypeOfRepair $typeOfRepair)
    {
        //
    }
}
