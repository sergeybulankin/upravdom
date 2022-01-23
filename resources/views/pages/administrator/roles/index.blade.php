@extends('index')

@section('information_block')
    <h1>
        Уровни доступа
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <table class="table table-responsive">
            <tr>
                <th>Роль</th>
                <th>Уровень доступа</th>
                <th></th>
            </tr>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->name_role}}</td>
                    <td>{{$role->level_role}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
