@extends('layouts.main')


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Категория</h1>
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
            <div class="col-12">
                <div class="card">
                <div class="card-header d-flex">
                    @can('access-route', $user)

                        <form action="{{route('user.delete', $user->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="удалить">
                        </form>
                        <div class="mr-3">
                            <a href="{{route('user.edit', $user->id)}}"
                                class="btn btn-primary">редактировать</a>
                        </div>
                
                   
                    @endcan  
                    <div div class="mr-3">
                            <a href="{{route('user.index')}}" class="btn btn-info">вернуться в список</a>
                    </div>
                    </div> 

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$user->id}}</a></td>
                                </tr>
                                <tr>
                                    <td>имя</td>
                                    <td>{{$user->name}}</a></td>
                                </tr>
                                <tr>
                                    <td>фамилия</td>
                                    <td>{{$user->surname}}</a></td>
                                </tr>
                                <tr>
                                    <td>отчество</td>
                                    <td>{{$user->patronymic}}</a></td>
                                </tr>
                                <tr>
                                    <td>эл.почта</td>
                                    <td>{{$user->email}}</a></td>
                                </tr>
                                <tr>
                                    <td>возраст</td>
                                    <td>{{$user->age}}</a></td>
                                </tr>
                                <!-- <tr>
                                    <td>пол</td>
                                    <td>{{$user->genderTitle}}</a></td>
                                </tr> -->
                                <tr>
                                    <td>адрес</td>
                                    <td>{{$user->adress}}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection