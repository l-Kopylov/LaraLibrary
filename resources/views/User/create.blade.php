@extends('layouts.main')


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавить категорию</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form action="{{route('user.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <span>Имя</span>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Имя">
                </div>
                <div class="form-group">
                    <span>Имя</span>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <span>Пароль</span>
                    <input type="text" value="{{old('password')}}" name="password" class="form-control" placeholder="Пароль">
                </div>
                <div class="form-group">
                    <span>Подтверждение пароля</span>
                    <input type="text" value="{{old('password_confirmation')}}" name="password_confirmation"
                        class="form-control" placeholder="Подтвердите пароль">
                </div>
                <div class="form-group">
                    <span>Фамилия</span>
                    <input type="text" value="{{old('surname')}}" name="surname" class="form-control" placeholder="Фамилия">
                </div>
                <div class="form-group">
                    <span>Отчество</span>
                    <input type="text" value="{{old('patronymic')}}" name="patronymic" class="form-control" placeholder="Отчество">
                </div>
                <div class="form-group">
                    <span>Возраст</span>
                    <input type="text" value="{{old('age')}}" name="age" class="form-control" placeholder="Возраст">
                </div>
                <div class="form-group">
                    <span>Адрес</span>
                    <input type="text" value="{{old('adress')}}" name="adress" class="form-control" placeholder="Адрес">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="добавить">
                </div>
            </form>

        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection