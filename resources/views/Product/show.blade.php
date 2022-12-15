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
                            <a href="{{route('product.edit', $product->id)}}"
                                class="btn btn-primary">редактировать</a>
                        </div>
                        <div div class="mr-3">
                            <a href="{{route('product.index')}}" class="btn btn-info">вернуться в список</a>
                        </div>
                        <form action="{{route('product.delete', $product->id)}}" method="post">
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
                                    <td>{{$product->id}}</td>
                                    <td><a href="{{ route('product.show', $product->id) }}">{{$product->title}}</a></td>
                                    <td>{{$product->description}}</td> 
                                    <td>{{$product->content}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->count}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->colors}}</td>
                                 
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