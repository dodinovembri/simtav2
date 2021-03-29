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
								<span>Inputan untuk KRS, KP & Transkrip Nilai</span>
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
						@include('my_thesis.components.kkt')
						@include('my_thesis.components.thesis_topic')
						@include('my_thesis.components.proposal_seminar')
						@include('my_thesis.components.comprehensive')
						@include('my_thesis.components.meeting')
					</div><!-- tab-content -->
				</div><!-- card -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection