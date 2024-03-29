@extends('layouts.main')


@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">теги</h1>
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
                    @can('access-route', $tag)
                        <form action="{{route('tag.delete', $tag->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="удалить">
                        </form>
                        <div class="mr-3">
                            <a href="{{route('tag.edit', $tag->id)}}"
                                class="btn btn-primary">редактировать</a>
                        </div>
                    @endcan  
                    <div div class="mr-3">
                            <a href="{{route('tag.index')}}" class="btn btn-info">вернуться в список</a>
                    </div>
                    </div> 

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$tag->id}}</a></td>
                                </tr> 
                                <tr>
                                    <td>наименование</td>
                                    <td>{{$tag->title}}</a></td>
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