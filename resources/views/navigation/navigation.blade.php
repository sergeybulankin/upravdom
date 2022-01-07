<ul class="nav flex-column">
    <li>
        <a href="{{route('dashboard')}}">
            Рабочий стол
        </a>
    </li>
    @can('before', [\App\Http\Controllers\UserController::class, \App\Http\Controllers\RoleController::class])
        <li>
            <a href="{{route('show-users')}}">
                Пользователи
            </a>
        </li>
        <li>
            <a href="{{route('show-roles')}}">
                Уровни доступа
            </a>
        </li>
    @endcan
    <li>
        <a href="">
            Обращения
        </a>
        <span>15</span>
    </li>
    <li>
        <a href="{{route('logout')}}">
            Выйти
        </a>
    </li>
</ul>
