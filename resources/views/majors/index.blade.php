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
					<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Jurusan</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">List Jurusan</h4>
		</div>
	</div>
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<a href="{{ url('majors/create') }}">
							<button class="btn btn-primary"><i data-feather="plus"></i> Add New</button>
						</a><br><br>
						@if(session()->has('success'))
						<div class="alert alert-success alert-dismissible mg-b-0 fade show" role="alert">
							<i class="icon fa fa-close"></i> {{ session()->get('success') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div><br>
						@endif
						@if(session()->has('error'))
						<div class="alert alert-warning alert-dismissible mg-b-0 fade show" role="alert">
							<i class="icon fa fa-close"></i> {{ session()->get('error') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div><br>
						@endif
						<table id="example1" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Jurusan</th>
									<th>Nama Jurusan</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($majors as $key => $value) {
									$no++; ?>
									<tr>
										<td>{{ $no }}</td>
										<td>{{ $value->majors_code }}</td>
										<td>{{ $value->majors_name }}</td>
										<td><?php echo CheckStatus($value->status); ?></td>
										<td>
											<a href="{{ url('majors/edit', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a>
											<a href="#modal1{{$value->id}}" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
										</td>
									</tr>
									<div class="modal fade" id="modal1{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h6 class="modal-title" id="exampleModalLabel">Delete Confirm</h6>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true"><i data-feather="x"></i></span>
													</button>
												</div>
												<div class="modal-body">
													<p class="mg-b-0">Are you sure want to delete this record? </p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary rounded-5" data-dismiss="modal">Cancel</button>
													<a href="{{ url('majors/destroy', $value->id) }}"><button type="button" class="btn btn-dark rounded-5">Delete</button></a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	@include('components.footer')

</div>

@endsection