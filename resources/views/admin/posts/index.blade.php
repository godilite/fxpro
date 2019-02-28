@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create Category
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Blog</a></li>
      <li class="breadcrumb-item active">Category</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-12">
        @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
            {{$error}}
            </li>
            @endforeach
            </ul>
        @endif
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Posts</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
				<div class="table-responsive">
				  <table class="table table-hover">
					<tr>
					  <th>Image</th>
					  <th>Title</th>
                      <th>Last Updated</th>
                      <th>Actions</th>
                    </tr>
                    @if ($posts->count() < 1)
                       <div class="text-center">Post Not Created!</div>
                    @else
                    @foreach ($posts as $post)
                    <tr>
                        <td> <img src="{{ $post->featured }}" alt="" width="90px" height="50px"> </td>
                        <td>{{ $post->title }}</td>
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ $post->updated_at }}</span> </td>
                        <td><a href="{{ route('post.edit',['id'=>$post->id]) }}"><i class="fa fa-pencil-square-o"></i> Edit</a><br>
                          <a href="{{ route('post.delete',['id'=>$post->id]) }}"><i class="fa fa-trash-o"></i> Trashed</a></td>
                    </tr>                        
                    @endforeach
                    @endif
				  </table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop