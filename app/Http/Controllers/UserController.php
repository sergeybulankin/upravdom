<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::with('role')->get();
        return view('pages.administrator.users.index', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles = Role::all();
        return view('pages.administrator.users.create', compact('roles'));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $user = User::with('role')->where('id', $user->id)->first();
        $roles = Role::all();
        return view('pages.administrator.users.edit', compact('user', 'roles'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $user = User::all()->where('id', $request->id)->first();
        $user_role = RoleUser::all()->where('user_id', $request->id)->first();
        $name = $request->name;
        $phone = $request->phone;
        $password = $request->password;
        $role = $request->role;

        if ($user->name != $name) $user->name = $name;
        if ($user->phone != $phone) $user->phone = $phone;
        if (!empty($password)) $user->password = Hash::make($password);

        if ($user_role->role_id != $role) $user_role->role_id = $role;

        $user->save();
        $user_role->save();

        return redirect('users');
    }
}
