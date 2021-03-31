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
					<li class="breadcrumb-item"><a href="">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dosen</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">List Dosen</h4>
		</div>
	</div>
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<a href="{{ url('lecturer/create') }}">
							<button class="btn btn-primary"><i data-feather="plus"></i> Add New</button>
						</a><br><br>
						@include('components.flash')
						<table id="example1" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>NIP</th>
									<th>Nama</th>
									<th>Tipe</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($lecturers as $key => $value) {
									$no++; ?>
									<tr>
										<td>{{ $no }}</td>
										<td>{{ $value->nip }}</td>
										<td>{{ $value->given_name." ".$value->middle_name." ".$value->surname }}</td>
										<td><?php echo CheckUserType($value->person_type_code); ?></td>
										<td><?php echo CheckStatus($value->status); ?></td>
										<td>
											<a href="{{ url('lecturer/edit', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a>
											<a href="#modal1{{$value->id}}" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
										</td>
									</tr>
									@include('lecturer.components.modal')
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