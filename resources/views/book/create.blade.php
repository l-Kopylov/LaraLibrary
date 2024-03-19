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
            <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                      <label>Название</label>
                      <input type="text" name="title" class="form-control" placeholder="Название">

                      <label>Год издания</label>
                      <input type="date" name="datep" class="form-control" placeholder="Год издания">

                      <label>Описание</label>  
                    <textarea name="content"  cols="30" rows="10" class="form-control" placeholder="Описание"></textarea>

                    <label for="prewiev_image">Обложка</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="prewiev_image" type="file" class="custom-file-input" id="prewiev_image">
                        <label class="custom-file-label" for="prewiev_image">Выберите файл</label>
                      </div>

                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                  
                  <label>Автор книги</label>
                  <select class="form-control select2" name="user_id" style="width: 100%;">
                    <option selected="selected" disabled>Выберите автора книги</option>
                      
                          <option value="{{$user->id}}">{{$user->name}}</option>
                    
                  </select>
                
                  <label>Жанр</label>
                  <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Рубрика" style="width: 100%;">
                      @foreach($tags as $tag)
                          <option value="{{$tag->id}}">{{$tag->title}}</option>
                      @endforeach    
            
                  </select>
                </div>

                  <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="добавить">
                  </div>
            </form>

        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection