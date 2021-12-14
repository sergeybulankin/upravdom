@extends('layouts.app')

@section('content')
    <div class="columns columns-is-dark">
        <div class="auth auth-is-dark">
            <div class="auth-wrap">
                <div class="upravdom-logo">

                </div>
                <div class="auth-title">
                    <h1 class="auth-title__title">Вас приветствует «Управдом»</h1>
                    <span class="auth-title__subtitle">Зайдите через ваш номер телефона</span>
                </div>
                <form method="GET"  action="{{ route('login') }}">
                    <div class="auth-form__item">
                        <label for="phone">
                            <input type="text" name="phone" id="phone" placeholder="Ваш номер телефона">
                        </label>
                    </div>

                    <div class="auth-form__item">
                        <label for="password">
                            <input type="password" name="password" id="password" placeholder="Пароль">
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="button-auth">Войти</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="image image-is-auth"></div>
    </div>
@endsection
