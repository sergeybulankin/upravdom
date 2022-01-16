@extends('index')

@section('information_block')
    <h1>
        Редактирование пользователя
    </h1>

    <div class="col-8 dashboard-wrapper__tasks">
        <div class="card-body">
            <form method="POST" action="{{ route('update-user') }}">
                @csrf

                <input type="hidden" value="{{ $user->id }}" name="id">

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Номер телефона') }}</label>

                    <div class="col-md-6">
                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Роль') }}</label>

                    <div class="col-md-6">
                        <select class="list-group-item col-md-12" name="role" id="role">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}" name="{{$role->id}}"
                                    @if ($role->id == $user->role->role_id)
                                        selected="selected"
                                    @endif
                                >
                                    {{ $role->name_role }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Повторите пароль') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
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
