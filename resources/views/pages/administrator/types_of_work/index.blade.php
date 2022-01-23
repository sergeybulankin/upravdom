@extends('index')

@section('information_block')
    <h1>
        Виды работ
        <span class="add-task">
            <a href="{{route("add-type-of-work")}}">Новый вид работы</a>
        </span>
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <table class="table table-responsive">
            <tr>
                <th>Категория ремонта</th>
                <th>Вид работы</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($types as $type)
                <tr>
                    <td>{{$type->repairs->type_of_repair}}</td>
                    <td>{{$type->type_of_work}}</td>
                    <td>
                        <a href="{{route('edit-type-of-work', ['typeOfWork' => $type->id])}}">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
