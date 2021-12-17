@extends('layouts.app')

@section('content')
    <div class="row container-fluid wrapper">
        <div class="col-2 navigation">
            <div class="navigation-logotype">
                <div class="navigation-logotype__block">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/logo_mini.png')}}" alt="Логотип">
                    </a>
                </div>
                <div class="navigation-logotype__information">
                    <h1>ЖЭУ-8</h1>
                </div>
            </div>

            <nav>
                <ul class="nav flex-column">
                    <li>
                        <a href="">
                            Рабочий стол
                        </a>
                    </li>
                    <li>Диспетчерская</li>
                    <li>
                        <a href="">
                            Обращения
                        </a>
                        <span>15</span>
                    </li>
                    <li>В работе</li>
                </ul>
            </nav>
        </div>

        <div class="col-10 dashboard">
            <header class="row">
                <div class="col-6">
                    <input type="text" placeholder="Поиск">
                </div>
                <div class="col-6">
                    информационный блок
                </div>
            </header>
        </div>
    </div>
@endsection()
