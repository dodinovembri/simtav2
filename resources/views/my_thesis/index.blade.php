@extends('layouts.backend')

@section('content')

@include('components.sidebar')


<div class="content">
	@include('components.header')
	@include('components.helper')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Skripsi Saya</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-sm">Skripsi Saya</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="row row-sm">
			<div class="col-xl-8">
				<div class="timeline-item">
					<div class="row row-sm">
						<div class="col-sm-3 col-lg-2">
							<div class="date-wrapper">
								<span class="timeline-date">Today, Jul 01, 2019</span>
								<h6 class="timeline-time">08:40<span>pm</span></h6>
							</div>
						</div>
						<?php if (!isset($my_thesis)) { ?>
							<div class="col-sm-9">
								<div class="timeline-body">
									<div class="timeline-header">
										<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-pink">g</span></div>
										<h6>George Winslett</h6>
										<span>added a new note to self</span>
									</div><!-- timeline-header -->
									<div class="card card-timeline card-timeline-note">
										<h5>Upload KRS, KP dan Transkrip Nilai.</h5>
										<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="{{ url('my_thesis/create_kkt_file') }}">Upload Sekarang!</a></p>
									</div>
								</div><!-- timeline-body -->
							</div>
							<?php } else {
							if ($my_thesis->is_kkt_file_set != 1) { ?>
								<div class="col-sm-9">
									<div class="timeline-body">
										<div class="timeline-header">
											<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-pink">g</span></div>
											<h6>George Winslett</h6>
											<span>added a new note to self</span>
										</div><!-- timeline-header -->
										<div class="card card-timeline card-timeline-note">
											<h5>Upload KRS, KP dan Transkrip Nilai.</h5>
											<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="{{ url('my_thesis/create_kkt_file') }}">Upload Sekarang!</a></p>
										</div>
									</div><!-- timeline-body -->
								</div>
							<?php } else { ?>
								<div class="col-sm-9">
									<div class="timeline-body">
										<div class="timeline-header">
											<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
											<h6>Reynante Labares</h6>
											<span>uploaded 3 new photos</span>
										</div><!-- timeline-header -->
										<div class="card card-timeline card-timeline-photo">
											<div class="row row-xs">
												<?php foreach ($person_assets as $key => $value) { ?>
													<div class="col">
														<a href="{{ asset($value->url) }}/{{ $value->file_name }}" target="_blank"><img src="{{ asset($value->url) }}/{{ $value->file_name }}" class="img-fluid" alt=""></a>
													</div>
												<?php } ?>
											</div><!-- row -->
										</div>
									</div><!-- timeline-body -->
								</div>
						<?php }
						} ?>
					</div><!-- row -->
				</div><!-- timeline -->
				<div class="timeline-item">
					<div class="row row-sm">
						<div class="col-sm-3 col-lg-2">
							<div class="date-wrapper">
								<span class="timeline-date">Today, Jul 01, 2019</span>
								<h6 class="timeline-time">07:20<span>pm</span></h6>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="timeline-body">
								<div class="timeline-header">
									<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
									<h6>Reynante Labares</h6>
									<span>uploaded 3 new photos</span>
								</div><!-- timeline-header -->
								<div class="card card-timeline card-timeline-photo">
									<div class="row row-xs">
										<div class="col">
											<img src="https://via.placeholder.com/1000x563/637382/fff" class="img-fluid" alt="">
										</div>
										<div class="col">
											<img src="https://via.placeholder.com/1000x563/637382/fff" class="img-fluid" alt="">
										</div>
										<div class="col">
											<img src="https://via.placeholder.com/1000x563/637382/fff" class="img-fluid" alt="">
										</div>
									</div><!-- row -->
								</div>
							</div><!-- timeline-body -->
						</div>
					</div><!-- row -->
				</div><!-- timeline-item -->
				<div class="timeline-item">
					<div class="row row-sm">
						<div class="col-sm-3 col-lg-2">
							<div class="date-wrapper">
								<span class="timeline-date">Sun, Jun 27, 2019</span>
								<h6 class="timeline-time">11:30<span>am</span></h6>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="timeline-body">
								<div class="timeline-header">
									<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-success">s</span></div>
									<h6>Socrates Itumay</h6>
									<span>shared an article</span>
								</div><!-- timeline-header -->
								<div class="card card-timeline card-timeline-article">
									<div class="media d-block d-sm-flex">
										<a href="" class="d-block wd-150"><img src="../assets/img/img16.png" class="img-fluid" alt=""></a>
										<div class="media-body mg-t-15 mg-sm-t-0 mg-sm-l-20">
											<h5><a href="" class="link-01">Responsive typography and web design for beginners</a></h5>
											<p class="tx-13 mg-b-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div><!-- media-body -->
									</div><!-- media -->
								</div>
							</div><!-- timeline-body -->
						</div>
					</div><!-- row -->
				</div><!-- timeline-item -->
				<div class="timeline-item">
					<div class="row row-sm">
						<div class="col-sm-3 col-lg-2">
							<div class="date-wrapper">
								<span class="timeline-date">Sun, Jun 27, 2019</span>
								<h6 class="timeline-time">10:48<span>am</span></h6>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="timeline-body">
								<div class="timeline-header">
									<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-success">s</span></div>
									<h6>Socrates Itumay</h6>
									<span>shared an article</span>
								</div><!-- timeline-header -->
								<div class="card card-timeline card-timeline-article">
									<div class="media d-block d-sm-flex">
										<a href="" class="d-block wd-150"><img src="../assets/img/img17.jpg" class="img-fluid" alt=""></a>
										<div class="media-body mg-t-15 mg-sm-t-0 mg-sm-l-20">
											<h5><a href="" class="link-01">CSS3 Secondary Expandable Navigation</a></h5>
											<p class="tx-13 mg-b-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div><!-- media-body -->
									</div><!-- media -->
								</div>
							</div><!-- timeline-body -->
						</div>
					</div><!-- row -->
				</div><!-- timeline -->
				<div class="timeline-item">
					<div class="row row-sm">
						<div class="col-sm-3 col-lg-2">
							<div class="date-wrapper">
								<span class="timeline-date">Fri, Jun 24, 2019</span>
								<h6 class="timeline-time">04:32<span>pm</span></h6>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="timeline-body">
								<div class="timeline-header">
									<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-danger">r</span></div>
									<h6>Dyanne Aceron</h6>
									<span>uploaded 2 new photos</span>
								</div><!-- timeline-header -->
								<div class="card card-timeline card-timeline-photo">
									<div class="row row-xs">
										<div class="col">
											<img src="../assets/img/img18.png" class="img-fluid" alt="">
										</div>
										<div class="col">
											<img src="../assets/img/img19.jpg" class="img-fluid" alt="">
										</div>
									</div><!-- row -->
								</div>
							</div><!-- timeline-body -->
						</div>
					</div><!-- row -->
				</div><!-- timeline-item -->
			</div><!-- col -->
			<div class="col-xl-4 d-none d-xl-block">
				<h6 class="tx-uppercase tx-semibold mg-b-15">Upcoming Events</h6>
				<ul class="list-unstyled timeline-list-event">
					<li>
						<div class="card card-timeline-event">
							<h6 class="tx-14 tx-semibold mg-b-2"><a href="" class="link-01">Boost Revenue Workshop Seminar</a></h6>
							<p class="mg-b-2">Saturday, July 31, 2019</p>
							<p class="tx-sm tx-color-04"><strong>9am - 3pm</strong> Manila, Philippines</p>
							<p class="tx-sm tx-color-04 mg-b-10"><span class="tx-danger">Sold Out</span> (5000+ tickets sold)</p>
							<div class="d-flex align-items-center">
								<div class="avatar-group">
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-dark">r</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-teal">a</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-pink">y</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-orange">m</span></div>
								</div>
								<span class="avatar-group-more tx-12">18+ more</span>
							</div>
						</div><!-- card -->
					</li>
					<li>
						<div class="card card-timeline-event">
							<h6 class="tx-14 tx-semibold mg-b-2"><a href="" class="link-01">PH World Mall Lantern Festival</a></h6>
							<p class="mg-b-2">Tuesday, August 05, 2019</p>
							<p class="tx-sm tx-color-04"><strong>8am - 4pm</strong> Bay Area, San Francisco</p>
							<p class="tx-sm tx-color-04 mg-b-10"><span class="tx-success">Free Registration</span> (Limited seats only)</p>
							<div class="d-flex">
								<div class="avatar-group">
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-danger">r</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-success">m</span></div>
								</div>
							</div>
						</div><!-- card -->
					</li>
					<li>
						<div class="card card-timeline-event">
							<h6 class="tx-14 tx-semibold mg-b-2"><a href="" class="link-01">Asia Pacific Generation Workshop</a></h6>
							<p class="mg-b-2">Friday, August 08, 2019</p>
							<p class="tx-sm tx-color-04"><strong>9am - 10pm</strong> Frankel, Singapore</p>
							<p class="tx-sm tx-color-04 mg-b-10"><span class="tx-warning">Sold out soon</span> (15 tickets left)</p>
							<div class="d-flex align-items-center">
								<div class="avatar-group">
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-teal">r</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-purple">a</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-info">y</span></div>
									<div class="avatar avatar-xs"><span class="avatar-initial rounded-circle bg-pink">m</span></div>
								</div>
								<span class="avatar-group-more tx-12">18+ more</span>
							</div>
						</div><!-- card -->
					</li>
					<li>
						<div class="card card-timeline-event">
							<h6 class="tx-14 tx-semibold mg-b-2"><a href="" class="link-01">Japan Smart Technology Show</a></h6>
							<p class="mg-b-2">Wednesday, August 15, 2019</p>
							<p class="tx-sm tx-color-04"><strong>8am - 11am</strong> Tokyo, Japan</p>
							<p class="tx-sm tx-color-04 mg-b-0"><span class="tx-success">Free Registration</span> (1 ticket sold)</p>
						</div><!-- card -->
					</li>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection