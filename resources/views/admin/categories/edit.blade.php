@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Category
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

      <div class="col-4">
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
            <h3 class="box-title">Editing <span class="">{{ $category->name }}</span>
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body pad">
            <form action="{{ route('category.update',['id'=>$category->id]) }}" method="post">            
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="form-control">
                    <div class="text-right">
                          <label for="featured">Saving...</label>
                          <button type="submit" class="btn btn-sm btn-primary">Update</button>
                      </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box -->         
      </div>

      <!-- /.col-->
      <div class="col-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Stats</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
				<div class="table-responsive">
				  <table class="table table-hover">
					<tr>
					  <th>Name</th>
					  <th>Posts</th>
                      <th>slug</th>
                      <th>Last Updated</th>
                      <th>Actions</th>
                    </tr>
                    <tr>
                        <td><a href="#">{{ $category->name }}</a></td>
                        <td>{{ $category->posts->count() }}</td>
                        <td>{{ $category->slug }}</td> 
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ $category->updated_at }}</span> </td>
                        <td><a href="{{ route('category.delete',['id'=>$category->id]) }}"><i class="fa fa-trash-o"></i> Delete</a></td>
                    </tr>                        
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