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
            <form action="{{route('product.store')}}" method="post">
                  @csrf

                  <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="наименование">
                  </div>                  <div class="form-group">
                      <input type="text" name="description" class="form-control" placeholder="описание">
                  </div>
                  <div class="form-group">
                    <textarea name="content"  cols="30" rows="10" class="form-control" placeholder="контент"></textarea>
                  </div>
                  <div class="form-group">
                      <input type="text" name="price" class="form-control" placeholder="цена">
                  </div>
                  <div class="form-group">
                      <input type="text" name="count" class="form-control" placeholder="количество">
                  </div>
                  <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="наименование">
                  </div>




                  <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="добавить">
                  </div>
            </form>

        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection