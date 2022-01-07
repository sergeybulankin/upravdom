@extends('index')

@section('information_block')
    <h1>
        Пользователи
        <span class="add-task">
            <a href="{{route("add-user")}}">Добавить пользователя</a>
        </span>
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        @foreach($users as $user)
            {{$user->phone}} <br>
        @endforeach
    </div>
@endsection
