@extends('index')

@section('information_block')
    <h1>
        Типы ремонта
        <span class="add-task">
            <a href="{{route("add-type-of-repair")}}">Добавить тип ремонта</a>
        </span>
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <table class="table table-responsive">
            <tr>
                <th>Тип ремонта</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($types as $type)
                <tr>
                    <td>{{$type->type_of_repair}}</td>
                    <td>
                        <a href="{{route('edit-type-of-repair', ['typeOfRepair' => $type->id])}}">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
