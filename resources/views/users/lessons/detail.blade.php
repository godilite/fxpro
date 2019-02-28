@extends('layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Lessons
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Course</a></li>
        <li class="breadcrumb-item active">Lessons</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-3 col-12">
          <div class="box box-solid">
            <div class="box-body no-padding mailbox-nav">
              <!-- Panel -->
			  <div class="panel">
				<div class="panel-body">
				  <div class="list-group faq-list" role="tablist">
					<a class="list-group-item active" data-toggle="tab" href="#category-1" aria-controls="category-1"
					role="tab">Introduction</a>
					<a class="list-group-item" data-toggle="tab" href="#category-2" aria-controls="category-2"
					role="tab">Lesson 1</a>
					</div>
				</div>
			  </div>
			  <!-- End Panel -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-9 col-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- Panel -->
			  <div class="panel">
				<div class="panel-body">
				  <div class="tab-content">
					<!-- Categroy 1 -->
					<div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
					  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
					  aria-multiselectable="true" role="tablist">
						<!-- Question 1 -->
						<div class="panel">
						  <div class="panel-heading" id="question-1" role="tab">
							<a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-toggle="collapse"
							href="#answer-1" data-parent="#accordion2">
							What is Lorem ipsum?
						  </a>
						  </div>
						  <div class="panel-collapse collapse show" id="answer-1" aria-labelledby="question-1"
						  role="tabpanel">
							<div class="panel-body">
							  Lorem ipsum Voluptate ad et culpa ad eu ex nulla voluptate nostrud consectetur
							  nisi nisi incididunt voluptate enim labore occaecat qui
							  laboris id sunt aute mollit reprehenderit aute non dolor
							  labore tempor Duis ex deserunt proident elit enim culpa
							  labore fugiat labore velit ut ea aute Ut laboris culpa
							  consectetur ex tempor cillum consectetur enim do aute
							  ut commodo mollit aute esse enim fugiat quis Excepteur
							  enim in qui nostrud et ad nulla tempor cupidatat fugiat
							  proident ut proident elit cupidatat laborum in fugiat
							  amet elit mollit sit commodo reprehenderit enim minim
							  sit Duis laboris dolor velit sed dolore consequat ea
							  magna ut laborum incididunt nostrud do non nisi minim
							  anim dolor anim ex adipisicing ut ex Ut cupidatat consectetur
							  ut magna est minim proident occaecat aliquip consectetur
							  adipisicing dolor ea nulla dolore commodo reprehenderit
							  velit nulla eu dolor proident aliqua elit est aliqua
							  labore eiusmod.
							</div>
						  </div>
						</div>
						<!-- End Question 1 -->
						<!-- Question 2 -->
						<div class="panel">
						  <div class="panel-heading" id="question-2" role="tab">
							<a class="panel-title" aria-controls="answer-2" aria-expanded="false" data-toggle="collapse"
							href="#answer-2" data-parent="#accordion2">
							How much does it cost to use Lorem ipsum?
						  </a>
						  </div>
						  <div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2"
						  role="tabpanel">
							<div class="panel-body">
								<i class="ion ion-ios-videocam bg-green"></i>

								<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> 18 days ago</span>
		
								<h3 class="timeline-header"><a href="#">Ajay Varma</a> shared a video</h3>
		
								<div class="timeline-body">
									<div class="embed-responsive embed-responsive-16by9">
									<iframe width="854" height="480" src="https://www.youtube.com/embed/k85mRPqvMbE" allowfullscreen></iframe>
									</div>
								</div>
								<div class="timeline-footer text-right">
									<a href="#" class="btn btn-sm bg-purple">See comments</a>
								</div>
								</div>
							</div>
						  </div>
						</div>
						<!-- End Question 2 -->
						<!-- Question 3 -->
						<div class="panel">
						  <div class="panel-heading" id="question-3" role="tab">
							<a class="panel-title" aria-controls="answer-3" aria-expanded="false" data-toggle="collapse"
							href="#answer-3" data-parent="#accordion2">
							What is the lorem ipsum pariatur?
						  </a>
						  </div>
						  <div class="panel-collapse collapse" id="answer-3" aria-labelledby="question-3"
						  role="tabpanel">
							<div class="panel-body">
							  Lorem ipsum Esse pariatur sit reprehenderit non culpa sint ullamco qui in aliquip
							  enim exercitation laborum ut eu voluptate exercitation
							  Duis dolore amet pariatur id occaecat incididunt deserunt
							  nulla esse proident.
							</div>
						  </div>
						</div>
						<!-- End Question 3 -->
						<!-- Question 4 -->
						<div class="panel">
						  <div class="panel-heading" id="question-4" role="tab">
							<a class="panel-title" aria-controls="answer-4" aria-expanded="false" data-toggle="collapse"
							href="#answer-4" data-parent="#accordion2">
						   Lorem ipsum commodo adipisicing sunt ad aliqua velit nulla?
						  </a>
						  </div>
						  <div class="panel-collapse collapse" id="answer-4" aria-labelledby="question-4"
						  role="tabpanel">
							<div class="panel-body">
							  Lorem ipsum Do cupidatat in culpa magna voluptate ullamco et anim nulla cupidatat
							  dolor culpa consequat quis dolor eu aliqua Ut eiusmod
							  ullamco sint reprehenderit commodo veniam ea irure sit
							  reprehenderit sunt sed sed proident ea incididunt esse
							  cillum cupidatat officia Duis.
							</div>
						  </div>
						</div>
						<!-- End Question 4 -->
					  </div>
					</div>
					<!-- End Categroy 1 -->
					<!-- Categroy 2 -->
					<div class="tab-pane animation-fade" id="category-2" role="tabpanel">
					  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion"
					  aria-multiselectable="true" role="tablist">
						<!-- Question 5 -->
						<div class="panel">
						  <div class="panel-heading" id="question-5" role="tab">
							<a class="panel-title" aria-controls="answer-5" aria-expanded="true" data-toggle="collapse"
							href="#answer-5" data-parent="#accordion">
							Can I exercitation occaecat voluptate duis ut dolore?
						  </a>
						  </div>
						  <div class="panel-collapse collapse show" id="answer-5" aria-labelledby="question-5"
						  role="tabpanel">
							<div class="panel-body">
							  Consecutus sicine hominum, artem conclusionemque patientia, omni fuerit intemperantiam
							  efficeretur phaedrum minime obiecta constituam, motus
							  mandamus perfunctio contra, imagines exquisitis reiciat.
							</div>
						  </div>
						</div>
						<!-- End Question 5 -->
						<!-- Question 6 -->
						<div class="panel">
						  <div class="panel-heading" id="question-6" role="tab">
							<a class="panel-title" aria-controls="answer-6" aria-expanded="false" data-toggle="collapse"
							href="#answer-6" data-parent="#accordion">
							How do lorem ipsum quis magna magna?
						  </a>
						  </div>
						  <div class="panel-collapse collapse" id="answer-6" aria-labelledby="question-6"
						  role="tabpanel">
							<div class="panel-body">
							  Pluribus horum laetamur forensibus investigandi gravissimis quaeque possumus copulationesque.
							  Sapientium interdictum, secutus servata expressas reici.
							  Dixerit dixerit tantis conscientiam arbitramur reprehensa
							  traditur propositum locos remotis, metus continent maledici
							  attico sermo iucundius gerendarum. Bonarum incommoda
							  afferrent iisque graeca perdiscere munere recordatione
							  nos sapiens, perspexit, oderit nominata.
							</div>
						  </div>
						</div>
						<!-- End Question 6 -->
						<!-- Question 7 -->
						<div class="panel">
						  <div class="panel-heading" id="question-7" role="tab">
							<a class="panel-title" aria-controls="answer-7" aria-expanded="false" data-toggle="collapse"
							href="#answer-7" data-parent="#accordion">
							How do I set up lorem ipsum?
						  </a>
						  </div>
						  <div class="panel-collapse collapse" id="answer-7" aria-labelledby="question-7"
						  role="tabpanel">
							<div class="panel-body">
							  Acute ennius fuisset facile plena quem possim tribus antipatrum moveat, praestabiliorem
							  geometria inportuno privamur, remissius habemus desperantes,
							  nullas quas terrore modum uberius homine adiuvet, dissentio
							  iudicabit ac, nullus molita foedus num. Circumcisaque
							  nulla aut etenim doceat pecunias afferrent infinitis,
							  propterea repellat epularum inveneris dissentiet meminerunt
							  malivoli gloriosis, faciunt petat conscientia, nesciunt
							  logikh fortunae, primos expedire aliquo putet aptissimum
							  officiis naturalem.
							</div>
						  </div>
						</div>
						<!-- End Question 7 -->
					  </div>
					</div>
					<!-- End Categroy 2 -->
				  </div>
				</div>
			  </div>
			  <!-- End Panel -->
            </div>
            <!-- /.box-body -->            
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
  @stop