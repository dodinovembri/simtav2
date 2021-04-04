@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">
	@include('components.header')

	<div class="content-body content-body-profile">
		@include('college_student_thesis.components.profile')
		<div class="profile-body">
			<div class="tab-content pd-15 pd-sm-20">
				<div id="overview" class="tab-pane active show">
					<label class="content-label content-label-lg mg-b-15 tx-color-01">KRS, KP dan Transkrip Nilai</label>
					<div class="stat-profile">
						<div class="stat-profile-body">
							<div class="row row-xs">
								<?php foreach ($person_assets as $key => $value) { ?>
									<div class="col">
										<div class="card card-body pd-10 pd-md-15 bd-0 shadow-none bg-primary-light">
											<a href="{{ asset($value->url) }}/{{ $value->file_name }}" target="_blank"><img src="{{ asset($value->url) }}/{{ $value->file_name }}" class="img-fluid" alt=""></a>
										</div>
									</div>
								<?php } ?>
							</div><!-- row -->
						</div><!-- stat-profile-body -->
					</div><!-- stat-profile -->
					<br>
					<div>
						@include('college_student_thesis.components.modal')
					</div>
				</div>
			</div><!-- tab-content -->
		</div><!-- profile-body -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection