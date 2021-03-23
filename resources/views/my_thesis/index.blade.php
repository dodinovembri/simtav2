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
		<div class="row row-xs">
			<div class="col-md-4">
				<ul class="list-group list-group-settings">
					<li class="list-group-item list-group-item-action">
						<a href="#paneProfile" data-toggle="tab" class="media active">
							<i data-feather="user"></i>
							<div class="media-body">
								<h6>KRS, KP & Transkrip Nilai</h6>
								<span>About your personal information</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneAccount" data-toggle="tab" class="media">
							<i data-feather="settings"></i>
							<div class="media-body">
								<h6>Topik TA</h6>
								<span>Manage your account setting options</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneNotification" data-toggle="tab" class="media">
							<i data-feather="bell"></i>
							<div class="media-body">
								<h6>Seminar Proposal</h6>
								<span>Choose how you receive notifications</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneBilling" data-toggle="tab" class="media">
							<i data-feather="credit-card"></i>
							<div class="media-body">
								<h6>Kompre</h6>
								<span>Your billing and payment information</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneSecurity" data-toggle="tab" class="media">
							<i data-feather="shield"></i>
							<div class="media-body">
								<h6>Rapat</h6>
								<span>Manage your security information</span>
							</div>
						</a>
					</li>
				</ul>
			</div><!-- col -->
			<div class="col-md-8">
				<div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
					<div class="tab-content">
						<div id="paneProfile" class="tab-pane active show">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Account Settings</h6>

							<hr>
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
												<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-info">r</span></div>
												<h6>Administrator</h6>
												<span>uploaded 2 new photos</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Verifikasi data input Mahasiswa</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Verifikasi data input Mahasiswa</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>input KRS, KP dan Transkrip Nilai</span>
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
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input KRS, KP dan Transkrip Nilai</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
						</div><!-- tab-pane -->
						<div id="paneAccount" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Account Settings</h6>

							<hr>
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
												<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
												<h6>Endang Lestari Ruskan</h6>
												<span>Input Persetujuan Topik TA</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input Persetujuan Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input Persetujuan Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Input Perubahan Topik TA</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input Perubahan Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input Perubahan Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
												<h6>Endang Lestari Ruskan</h6>
												<span>Input Persetujuan Topik TA</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input Persetujuan Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input Persetujuan Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Input Topik TA</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input Topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
						</div><!-- tab-pane -->
						<div id="paneNotification" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Notification Settings</h6>
							<hr>
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
												<h6>Pengelola</h6>
												<span>Input SK Sempro</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input SK Sempro</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input SK Sempro</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Pengelola</h6>
												<span>Perbaharui Status Sempro</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Perbaharui Status Sempro</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Perbaharui Status Sempro</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Pengelola</h6>
												<span>Konfirmasi Dosen Penguji</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi Dosen Penguji</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi Dosen Penguji</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Pengelola</h6>
												<span>Set Dosen Penguji</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Set Dosen Penguji</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Set Dosen Penguji</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Ajukan Seminar Proposal</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Ajukan Seminar Proposal</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Ajukan Seminar Proposal</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
												<h6>Endang Lestari Ruskan</h6>
												<span>Konfirmasi perpanjangan Seminar</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi perpanjangan Seminar</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi perpanjangan Seminar</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Input Perpanjangan Seminar Proposal</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input Perpanjangan Seminar Proposal</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input Perpanjangan Seminar Proposal</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
						</div><!-- tab-pane -->
						<div id="paneBilling" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Billing Settings</h6>
							<hr>
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
												<h6>Dodi Novembri</h6>
												<span>Ajukan Kompre</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input SK Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input SK Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Ajukan Kompre</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Perbaharui Status Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Perbaharui Status Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Konfirmasi Dosen Penguji</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi Dosen Penguji</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi Dosen Penguji</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Set Jadwal Kompre</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Set Jadwal Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Set Jadwal Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Ajukan Kompre</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Ajukan Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Ajukan Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-primary">r</span></div>
												<h6>Endang Lestari Ruskan</h6>
												<span>Konfirmasi perpanjangan Kompre</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi perpanjangan Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Konfirmasi perpanjangan Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
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
												<h6>Dodi Novembri</h6>
												<span>Input Perpanjangan Kompre</span>
											</div><!-- timeline-header -->
											<div class="card card-timeline card-timeline-note">
												<h5>Input Perpanjangan Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Input Perpanjangan Kompre</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
									</div>
								</div><!-- row -->
							</div><!-- timeline-item -->
						</div><!-- tab-pane -->
						<div id="paneSecurity" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Security Settings</h6>
							<hr>
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
											<div class="card card-timeline card-timeline-note">
												<h5>Pengelola menyetujui topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->
										<div class="timeline-body">
											<div class="card card-timeline card-timeline-note">
												<h5>Pengelola menyetujui topik TA</h5>
												<p class="mg-b-0">In this lesson, you create a layout in XML that includes a text field and a button. In the next lesson, your app responds when the...<a href="">Read more</a></p>
											</div>
										</div><!-- timeline-body -->										
									</div>
								</div><!-- row -->
							</div><!-- timeline -->
						</div><!-- tab-pane -->
					</div><!-- tab-content -->
				</div><!-- card -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection