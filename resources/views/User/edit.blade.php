@extends('layouts.main')


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Изменить данные пользователя</h1>
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
            <div class="row">
                <form action="{{route('user.store')}}" method="post" class="ml-3">
                    @csrf

                    <div class="form-group">
                        <span>Имя</span>
                        <input type="text" value="{{$user->name ?? old('name')}}" name="name" class="form-control"
                            placeholder="имя">
                    </div>
                    <div class="form-group">
                        <span>Фамилия</span>
                        <input type="text" value="{{$user->surname ?? old('surname')}}" name="surname"
                            class="form-control" placeholder="фамилия">
                    </div>
                    <div class="form-group">
                        <span>Отчество</span>
                        <input type="text" value="{{$user->patronymic ?? old('patronymic')}}" name="patronymic"
                            class="form-control" placeholder="отчество">
                    </div>
                    <div class="form-group">
                        <span>Возраст</span>
                        <input type="number" value="{{$user->age ?? old('age')}}" name="age" class="form-control"
                            placeholder="возраст">
                    </div>
                    <div class="form-group">
                        <span>Адрес</span>
                        <input type="text" value="{{$user->adress ?? old('adress')}}" name="adress" class="form-control"
                            placeholder="адрес">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="добавить">
                    </div>
                </form>

            </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection