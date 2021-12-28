@extends('index')

@section('information_block')
    <h1>
        Уровни доступа
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        @foreach($roles as $role)
            {{$role->name_role}} <br>
        @endforeach
    </div>
@endsection
