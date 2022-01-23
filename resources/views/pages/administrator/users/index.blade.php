@extends('index')

@section('information_block')
    <h1>
        Пользователи
        <span class="add-task">
            <a href="{{route("add-user")}}">Добавить пользователя</a>
        </span>
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <table class="table table-responsive">
            <tr>
                <th>Телефон</th>
                <th>Имя</th>
                <th>Уровень</th>
                <th>Дата последнего изменения</th>
                <th></th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role->role->name_role}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        <a href="{{route('edit-user', ['user' => $user->id])}}">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
