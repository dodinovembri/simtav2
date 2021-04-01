@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">
	@include('components.header')

	<div class="content-body content-body-profile">
		@include('manage_my_student_thesis.components.profile')
		<div class="profile-body">
			<div class="tab-content pd-15 pd-sm-20">
				<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Seminar Proposal</h6>
				<hr>
				<div id="overview" class="tab-pane active show">
					<?php if ($student_thesis->thesis_status_code == 5) { ?>
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
						</div>
					<?php } elseif ($student_thesis->thesis_status_code == 8) { ?>
						<div class="timeline-item">
							<div class="row row-sm">
								<div class="col-sm-3 col-lg-2"></div>
								<div class="col-sm-9">
									<div class="timeline-body">
										<div class="card card-timeline card-timeline-note">
											<div class="alert alert-danger alert-dismissible mg-b-0 fade show" role="alert">
												<i class="icon fa fa-close"></i> KRS, KP dan Transkrip ditolak, Alasan Penolakan: {{$my_thesis_history->description}}
											</div>
										</div>
									</div>
								</div>
							</div><!-- row -->
						</div><!-- timeline-item -->
						<div class="timeline-item">
							<div class="row row-sm">
								<div class="col-sm-3 col-lg-2"></div>
								<div class="col-sm-9">
									<div class="timeline-header">
										<span>File Konsultasi Perpanjangan Seminar Proposal</span>
									</div><!-- timeline-header -->
									<div class="timeline-body">
										<div class="card card-timeline card-timeline-note">
											<div class="row row-xs">
												<div class="col">
													<a href="{{ asset($extend_proposal_seminar->url) }}/{{ $extend_proposal_seminar->file_name }}" target="_blank"><img src="{{ asset($extend_proposal_seminar->url) }}/{{ $extend_proposal_seminar->file_name }}" class="img-fluid" alt=""></a>
												</div>
											</div><!-- row -->
										</div>
									</div>
									<div>
										@include('manage_my_student_thesis.components.extend_proposal')
									</div>
								</div>
							</div><!-- row -->
						</div>
					<?php } ?>
				</div>
			</div><!-- tab-content -->
		</div><!-- profile-body -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection