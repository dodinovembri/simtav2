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
					<li class="breadcrumb-item active" aria-current="page">Kelola Skripsi Mahasiswa</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Kelola Skripsi Mahasiswa</h4>
		</div>
	</div>
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<select class="form-control select2" name="month" required="" style="width: 180px">
							<option value=""></option>
							<option value="4">Memenuhi Syarat</option>
							<option value="2">Tidak Memenuhi Syarat</option>
						</select><br><br>
						@if(session()->has('success'))
						<div class="alert alert-success alert-dismissible mg-b-0 fade show" role="alert">
							<i class="icon fa fa-close"></i> {{ session()->get('success') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div><br>
						@endif
						@if(session()->has('info'))
						<div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
							<i class="icon fa fa-close"></i> {{ session()->get('info') }}
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
									<th>NIM</th>
									<th>Nama</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($college_student_thesis as $key => $value) {
									$no++; ?>
									<tr>
										<td>{{ $no }}</td>
										<td><a href="{{ url('college_student_thesis/show', $value->id) }}"><b>{{ $value->person->nim }}</b></a></td>
										<td>{{ $value->person->given_name." ".$value->person->middle_name." ".$value->person->surname }}</td>
										<td><?php echo CheckStatus($value->status); ?></td>
									</tr>
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