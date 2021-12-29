@extends('index')

@section('information_block')
    <h1>
        Диспетчерская
        <span class="add-task">Добавить задачу</span>
    </h1>

    <div class="col-md-8 col-sm-12 dashboard-wrapper__tasks">
        <h2>Открытые задачи</h2>
        <div class="col-12 dashboard-wrapper__task">
            <div class="dashboard-wrapper__information">
                <div class="dashboard-task__date">
                    <i class="bi bi-calendar-fill"></i>
                    15 марта 2045, 14:34
                </div>
                <div class="dashboard-task__map">
                    <i class="bi bi-geo-alt-fill"></i>
                    ул.Стахановая, 33 | кв. 15
                </div>
            </div>
            <div class="dashboard-task__title">
                Водоснабжение | Течь центрального стока
                <div class="dashboard-task__description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="row col-md-12 col-sm-12 dashboard-task__worker">
                <div class="col-md-8 col-sm-12 dashboard-task__worker-responsible">
                    <div>
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="dashboard-task__acting">
                        Иванов Иван | <span class="request">Заявка #54</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 dashboard-task__worker-status">
                    <div class="col-12 status-in-work waiting">
                        В работе <br>
                        <span>
                                            до 15 января 2045года
                                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 dashboard-wrapper__task">
            <div class="dashboard-wrapper__information">
                <div class="dashboard-task__date">
                    <i class="bi bi-calendar-fill"></i>
                    13 марта 2045, 17:14
                </div>
                <div class="dashboard-task__map">
                    <i class="bi bi-geo-alt-fill"></i>
                    ул.Олега Кошевого, 145 | кв. 43
                </div>
            </div>
            <div class="dashboard-task__title">
                Заказ услуги | Замена автомата
                <div class="dashboard-task__description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="row col-md-12 col-sm-12 dashboard-task__worker">
                <div class="col-md-8 col-sm-12 dashboard-task__worker-responsible">
                    <div>
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="dashboard-task__acting">
                        Ибрагимов Олег | <span class="request">Заявка #27</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 dashboard-task__worker-status">
                    <div class="col-12 status-in-work fatal">
                        Провалено <br>
                        <span>
                                            до 15 января 2044года
                                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
