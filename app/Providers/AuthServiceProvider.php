<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\TypeOfRepair;
use App\Models\TypeOfWork;
use App\Models\User;
use App\Policies\RoleControllerPolicy;
use App\Policies\TypeOfRepairControllerPolicy;
use App\Policies\UserControllerPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Role::class => RoleControllerPolicy::class,
        User::class => UserControllerPolicy::class,
        TypeOfRepair::class => TypeOfRepairControllerPolicy::class,
        TypeOfWork::class => TypeOfRepairControllerPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
