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
                        <div class="mr-3">
                            <a href="{{route('book.edit', $book->id)}}"
                                class="btn btn-primary">редактировать</a>
                        </div>
                        <div div class="mr-3">
                            <a href="{{route('book.index')}}" class="btn btn-info">вернуться в список</a>
                        </div>
                        <form action="{{route('book.delete', $book->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="удалить">
                        </form>
                    </div>

                   
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered  text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Описание</th>
                                    <th>Контент</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                    <th>К-я</th>
                                    <th>Создан</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td><a href="{{ route('book.show', $book->id) }}">{{$book->title}}</a></td>
                                    <td>{{$book->description}}</td> 
                                    <td>{{$book->content}}</td>
                                    <td>{{$book->datep}}</td>
                                    <td>{{$book->count}}</td>
                                    <td>{{$book->category_id}}</td>
                                    <td>{{$book->created_at}}</td>
                                 
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