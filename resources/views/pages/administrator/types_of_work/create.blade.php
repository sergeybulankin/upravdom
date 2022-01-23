@extends('index')

@section('information_block')
    <h1>
        Добавление нового вида ремонта
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <div class="card-body">
            <form method="POST" action="{{ route('store-type-of-work') }}">
                @csrf

                <div class="row mb-3">
                    <label for="type_of_repair" class="col-md-4 col-form-label text-md-right">{{ __('Тип ремонта') }}</label>

                    <div class="col-md-6">
                        <select class="list-group-item col-md-12" name="type_of_repair" id="type_of_repair">
                            @foreach($types as $type)
                                <option value="{{$type->id}}" name="{{$type->id}}">{{ $type->type_of_repair }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="typeOfWork" class="col-md-4 col-form-label text-md-right">{{ __('Тип') }}</label>

                    <div class="col-md-6">
                        <input id="typeOfWork" type="text" class="form-control @error('typeOfWork') is-invalid @enderror" name="typeOfWork" value="{{ old('typeOfWork') }}" required autocomplete="typeOfWork" autofocus>

                        @error('typeOfWork')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn add-task">
                            {{ __('Добавить') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
