
@extends('layouts.dashboard')

@section('content')
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      @if (Auth::user())
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-blue">
            <span class="info-box-icon push-bottom"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Clients</span>
              <span class="info-box-number">450</span>

              <div class="progress">
                <div class="progress-bar" style="width: 45%"></div>
              </div>
              <span class="progress-description">
                    45% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-green">
            <span class="info-box-icon push-bottom"><i class="ion ion-ios-eye-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Visits</span>
              <span class="info-box-number">15,489</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                    40% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-purple">
            <span class="info-box-icon push-bottom"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Downloads</span>
              <span class="info-box-number">55,005</span>

              <div class="progress">
                <div class="progress-bar" style="width: 85%"></div>
              </div>
              <span class="progress-description">
                    85% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-red">
            <span class="info-box-icon push-bottom"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Chat</span>
              <span class="info-box-number">13,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    50% Increase in 28 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      @endif
      <div class="row">
          <div class="col-12">
            <div class="box box-solid">
              <div class="box-header">
                <i class="fa fa-pie-chart"></i>
  
                <h3 class="box-title">Course Progress</h3>
  
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-3 text-center">
                    <input type="text" class="knob" value="40" data-thickness="0.2" data-width="100" data-height="100" data-fgColor="#389af0" data-readonly="true">
  
                    <div class="knob-label">data-width="100"</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      
      <!-- /.row -->
      <div class="row">
            <div class="col-xl-8 connectedSortable">
                    <!-- Chat box -->
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <h3 class="box-title">Recommended Courses</h3>
          
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="row">
                          <ul class="users-list clearfix">
                            <li>
                              <img src="images/user1-128x128.jpg" alt="User Image">
                              <a class="users-list-name" href="#">Arijit Sinh</a>
                              <span class="users-list-date">Today</span>
                            </li>
                        
                            <li>
                              <img src="images/user3-128x128.jpg" alt="User Image">
                              <a class="users-list-name" href="#">Juliya</a>
                              <span class="users-list-date">15 Jan</span>
                            </li>
                            </ul>

                        </div>
                      </div>
                  </div>
        <!-- /.col -->
            </div>
        
        <div class="col-xl-4 connectedSortable">
          <!-- weather -->
          <div class="box bg-blue text-center">			
			<div class="box-body">
			  <div class="p-5">
				  <h3 class="white">
					<span class="font-size-30">City, </span>Country
				  </h3>
				  <p class="weather-day-date mb-30">
					<span class="mr-5">MONDAY</span> May 11, 2017
				  </p>
				  <div class="mb-30 weather-icon">
					<canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
					<div class="inline-block">
					  <span class="font-size-50">29°
						<span class="font-size-40">C</span>
					  </span>
					  <p class="text-left">DAY RAIN</p>
					</div>
				  </div>
				  <div class="row no-space">
					<div class="col-2">
					  <div>
						<div class="mb-10">TUE</div>
						<i class="wi-day-sunny font-size-30 mb-10"></i>
						<div>24°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">WED</div>
						<i class="wi-day-cloudy font-size-30 mb-10"></i>
						<div>21°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">THU</div>
						<i class="wi-day-sunny font-size-30 mb-10"></i>
						<div>25°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">FRI</div>
						<i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
						<div>20°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">SAT</div>
						<i class="wi-day-lightning font-size-30 mb-10"></i>
						<div>18°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
					<div class="col-2">
					  <div>
						<div class="mb-10">SUN</div>
						<i class="wi-day-storm-showers font-size-30 mb-10"></i>
						<div>14°
						  <span class="font-size-12">C</span>
						</div>
					  </div>
					</div>
				  </div>
				</div>
      </div>
      
			<!-- /.box-body -->
      </div>
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Updated Courses</h3>
  
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
            <li class="item">
              <div class="product-img">
              <img src="images/default-50x50.gif" alt="Product Image">
              </div>
              <div class="product-info">
              <a href="javascript:void(0)" class="product-title">iphone 7plus
                <span class="label label-warning pull-right">$300</span></a>
              <span class="product-description">
                  12MP Wide-angle and telephoto cameras.
                </span>
              </div>
            </li>
            <!-- /.item -->
          </ul>
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Courses</a>
          </div>
          <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@stop
