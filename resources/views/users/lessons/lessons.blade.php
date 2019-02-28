@extends('layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Cards
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">UI</a></li>
        <li class="breadcrumb-item active">User Cards</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <!-- START Card With Image -->
      <h2 class="card-title">Card with Image</h2>

      <div class="row">
        <div class="col-md-12 col-lg-3">
          <div class="box box-default">
              <img class="card-img-top img-responsive" src="../../images/card/img1.jpg" alt="Card image cap">
            <div class="box-body">            	
				<h4 class="card-title">Card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        
      </div>
      <!-- /.row -->
      <!-- END Card with image -->
           
	 
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@stop