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
					<li class="breadcrumb-item active" aria-current="page">Angkatan</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">List Angkatan</h4>
		</div>
	</div>
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<a href="{{ url('year_of_education/create') }}">
							<button class="btn btn-primary"><i data-feather="plus"></i> Add New</button>
						</a><br><br>
						@include('components.flash')
						<table id="example1" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Angkatan</th>
									<th>Nama Angkatan</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($year_of_educations as $key => $value) {
									$no++; ?>
									<tr>
										<td>{{ $no }}</td>
										<td>{{ $value->year_of_education_code }}</td>
										<td>{{ $value->year_of_education_name }}</td>
										<td><?php echo CheckStatus($value->status); ?></td>
										<td>
											<a href="{{ url('year_of_education/edit', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a>
											<a href="#modal1{{$value->id}}" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
										</td>
									</tr>
									@include('year_of_education.components.modal')
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