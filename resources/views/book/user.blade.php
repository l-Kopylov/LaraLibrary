@extends('layouts.main')


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
        
                <h1 class="nav-icon fa fa-book">Книги</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('base')}}">Home</a></li>
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
                    <div class="card-header">
                        <a href="{{route('book.create')}}" class="btn btn-primary">Добавить</a>
                    </div>
  


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered  text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Год издания</th>
                                    <th>Автор книги</th>
                                    <th>Жанр</th>
                                    <th>Создан</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td><a href="{{ route('book.show', $book->id) }}">{{$book->title}}</a></td>
                                    <td>{{$book->content}}</td>
                                    <td>{{$book->datep}}</td>
                                    <td>{{$book->user_id}}</td>
                                    <td>           
                                    @foreach($book->tags as $tag)
                                        {{ $tag->title }}{{ !$loop->last ? ',' : '' }}
                                    @endforeach
                                    </td>
                                    <td>{{$book->created_at}}</td>
 
                                </tr>
                              @endforeach 
                               
                            </tbody> 
                        </table>
            
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection