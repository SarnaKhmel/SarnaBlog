    @extends('admin.layouts.app_admin');


        @section('content');
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="jombotron">
                        <p> <span class="label label-primary">Категорій 0</span></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="jombotron">
                        <p> <span class="label label-primary">Матеріалів 0</span></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="jombotron">
                        <p> <span class="label label-primary">Користувачів 0</span></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="jombotron">
                        <p> <span class="label label-primary">Сьогодні 0</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#"> Створити категорію</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading"> Перша категорія</h4>
                    <p class="list-group-item-text">
                        Кіл-ть категорій
                    </p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#"> Створити матеріал</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading"> Перший матеріал</h4>
                    <p class="list-group-item-text">
                        Кіл-ть матеріалів
                    </p>
                </a>
            </div>
        </div>
        @endsection