@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create Post
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Forms</a></li>
      <li class="breadcrumb-item active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-8">
        @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
            {{$error}}
            </li>
            @endforeach
            </ul>
        @endif
        <form action="{{ route('post.update',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit blog post
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
            
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>
              <textarea class="textarea" name="content" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->content }}</textarea>
           
          </div>
        </div>
        <!-- /.box -->         
      </div>
      <!-- /.col-->
      <div class="col-4">
          <div class="form-control">
              <div class="text-right">
                    <label for="featured">Saving post...</label>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
        </div>
        <br>
          <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Category</label>
              <select name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>     
                @endforeach
              </select>
          </div>
          <div class="box-body">
              <div class="text-left">Tags:<div>
              <div class="demo-checkbox">
                @foreach ($tags as $tag)
                <input type="checkbox" id="basic_checkbox_2" name="tags[]" value="{{ $tag->id }}" class="filled-in"
                @foreach ($post->tags as $t)
                    @if ($tag->id == $t->id)
                        checked
                    @endif
                @endforeach
                >
                <label for="basic_checkbox_2">{{ $tag->tag }}</label>
                @endforeach
              </div>
          </div>
          </div>
      </div>
      </div>
    </form>
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop