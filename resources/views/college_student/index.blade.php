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
					<li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">List Mahasiswa</h4>
		</div>
	</div>
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<a href="{{ url('college_student/create') }}">
							<button class="btn btn-primary"><i data-feather="plus"></i> Add New</button>
						</a>
						<a href="#export_template" data-toggle="modal">
							<button class="btn btn-primary"><i data-feather="download"></i> Download Template</button>
						</a>
						<a href="#upload_data" data-toggle="modal">
							<button class="btn btn-primary"><i data-feather="upload"></i> Upload Data</button>
						</a><br><br>
						@include('college_student.components.export_template')
						@include('college_student.components.import_data')
						@include('college_student.components.flash_message')
						<table id="example1" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Tipe</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($college_students as $key => $value) {
									$no++; ?>
									<tr>
										<td>{{ $no }}</td>
										<td>{{ $value->nim }}</td>
										<td>{{ $value->given_name." ".$value->middle_name." ".$value->surname }}</td>
										<td><?php echo CheckUserType($value->person_type_code); ?></td>
										<td><?php echo CheckStatus($value->status); ?></td>
										<td>											
											<a href="{{ url('college_student/edit', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a>
											<a href="#modal1{{$value->id}}" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
										</td>
									</tr>
									@include('college_student.components.delete_data')
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