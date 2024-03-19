@extends('layouts.main')


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Изменить категорию</h1>
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
            <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="text" value="{{$book->title ?? old('title')}}" name="title" class="form-control" placeholder="наименование">
        </div>

        <div class="form-group">
            <textarea  value="{{$book->content ?? old('content')}}" name="content" cols="30" rows="10" class="form-control" placeholder="контент"></textarea>
        </div>
        <div class="form-group">
            <input type="text" value="{{$book->datep ?? old('datep')}}" name="datep" class="form-control" placeholder="цена">
        </div>
 
        <div class="form-group">
            <label for="exampleInputFile">файл</label>
            <div class="input-group">
                <div class="custom-file">
                    <input name="prewiev_image" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">выберите файл</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">загрузить</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>категории</label>
            <select class="form-control select2" name="category_id" style="width: 100%;">
                <option selected="selected" disabled>выберите категорию</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>теги</label>
            <select class="tags" name="tags[]" multiple="multiple" data-placeholder="выберите тег" style="width: 100%;">
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