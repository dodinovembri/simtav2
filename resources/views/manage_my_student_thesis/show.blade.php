@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">
	@include('components.header')

	<div class="content-body content-body-profile">
		@include('manage_my_student_thesis.components.profile')
		<div class="profile-body">
			<div class="profile-body-header">
				<div class="nav-wrapper">
					<ul class="nav nav-line" id="profileTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
						</li>
					</ul>
				</div><!-- nav-wrapper -->
			</div><!-- profile-body-header -->
			<div class="tab-content pd-15 pd-sm-20">
				<div id="overview" class="tab-pane active show">
					<div class="timeline-item">
						<div class="row row-sm">
							<div class="col-sm-3 col-lg-2"></div>
							<div class="col-sm-9">
								<div class="timeline-body">
									<div class="card card-timeline card-timeline-note">
										<p class="mg-b-0">Topik Tugas Akhir yang diajukan Mahasiswa</p>
										<h5>{{ $student_thesis->title_of_thesis }}</h5>
									</div>
								</div>
								<div class="timeline-header">
									<span>File Konsultasi</span>
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
								<div>
									@include('manage_my_student_thesis.components.modal')
								</div>
							</div>
						</div><!-- row -->
					</div><!-- timeline-item -->

				</div>
			</div><!-- tab-content -->
		</div><!-- profile-body -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection