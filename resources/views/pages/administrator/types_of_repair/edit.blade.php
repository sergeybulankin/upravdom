@extends('index')

@section('information_block')
    <h1>
        Редактирование типа ремонта
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <div class="card-body">
            <form method="POST" action="{{ route('update-type-of-repair') }}">
                @csrf

                <input type="hidden" value="{{ $typeOfRepair->id }}" name="id">

                <div class="row mb-3">
                    <label for="typeOfRepair" class="col-md-4 col-form-label text-md-right">{{ __('Тип') }}</label>

                    <div class="col-md-6">
                        <input id="typeOfRepair" type="text" class="form-control @error('typeOfRepair') is-invalid @enderror" name="typeOfRepair" value="{{ $typeOfRepair->type_of_repair }}" required autocomplete="typeOfRepair" autofocus>

                        @error('typeOfRepair')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn add-task">
                            {{ __('Обновить') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
