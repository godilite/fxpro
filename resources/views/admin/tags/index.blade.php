@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        Tags
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Blog</a></li>
      <li class="breadcrumb-item active">Tag</li>
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
            <h3 class="box-title">Add Tag</h3>
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
            <form action="/tag/store" method="post">            
                @csrf
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-control">
                    <div class="text-right">
                          <label for="featured">Saving...</label>
                          <button type="submit" class="btn btn-sm btn-primary">Create</button>
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
              <h3 class="box-title">Tags</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
				<div class="table-responsive">
				  <table class="table table-hover">
					<tr>
					  <th>Name</th>
					  <th>Last Updated</th>
                      <th>Actions</th>
                    </tr>
                    @if ($tags->count() < 1)
                       <div class="text-center">No Tag Created!</div>
                    @else
                    @foreach ($tags as $tag)
                    <tr>
                        <td><a href="#">{{ $tag->tag }}</a></td>
                        
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ $tag->updated_at }}</span> </td>
                        <td><a href="{{ route('tag.edit',['id'=>$tag->id]) }}"><i class="fa fa-pencil-square-o"></i> Edit</a><br>
                         </td>
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